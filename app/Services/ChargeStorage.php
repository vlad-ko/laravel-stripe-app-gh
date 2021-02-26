<?php

namespace App\Services;

use DB;
use Exception;
use App\Models\Charge;
use App\Models\Outcome;
use App\Models\Refund;
use App\Services\ChargeParser;



/**
 * This service stores the response
 * from Stripe API in MySQL
 */
class ChargeStorage {

	/**
	 * Store response in corresponding tables
	 * charges, outcomes, refunds (other tables can be implemented
	 * to store more data)
	 * @param  array $response to store in DB
	 * @return bool
	 */
	public function store($response)
	{
		// let's use transaction here to make sure everything
		// is saved correctly
		try {
			$exception = DB::transaction(function () use ($response) {
	    		//store charge
	    		$newCharge = Charge::create($response);
	    		$response[ChargeParser::OUTCOMES_KEY]['charge_id'] = $newCharge->id;
	    		$response[ChargeParser::REFUNDS_KEY]['data']['charge_id'] = $newCharge->id;

	    		//store outcome, refund with charge id
	    		//there may be more "Eloquent" way to handle this, but I like
	    		//to use transactions when saving a bunch of models.
	    		$outcome = Outcome::create($response[ChargeParser::OUTCOMES_KEY]);
	    		$refund = Refund::create($response[ChargeParser::REFUNDS_KEY]['data']);
			});

			//this should always return true, exception will be
			//caught by our try/catch block and we return false then
			//however it's good to be sure
			return is_null($exception) ? true : $exception;

		} catch (Exception $e) {
   			 return false; // incase of error rollback everyting and return false
   		}
	}

}