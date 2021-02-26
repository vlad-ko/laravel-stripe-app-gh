<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Charge;
use App\Http\Controllers\Controller;
use App\Services\QueryParser;

/**
 * Main controller to process "charges"
 */
class ReportsController extends Controller
{
	/**
	 * will be used to view the charges table
	 */
	public function index()
	{
		$chargeModel = new Charge;
		$charges = $chargeModel->getDataForReport();

		return view('report', compact('charges'));
	}

	/**
	 * Will be used to output data as JSON
	 * based on query string params
	 * @param  string $queryParams query to search charges table
	 * @return JSON             query results
	 */
	public function report($queryParams)
	{
		$parser = new QueryParser;
		list($conditions, $aggregates) = $parser->parse($queryParams)->convertToEloquent();
		$query = DB::table('charges')->where($conditions);

		// run  query with function (i.e. SUM()) and get result
		// else we run the query as normal and get results in array format
		if (!empty($aggregates)) {
			$result = $query->{$aggregates['function']}($aggregates['field']);
		} else {
			$result = $query->get()->toArray();
		}

		return json_encode($result);
	}
}