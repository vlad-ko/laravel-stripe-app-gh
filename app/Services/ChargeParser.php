<?php

namespace App\Services;

use App\Services\ChargeStorage;

/**
 * This service parses the Stripe API
 * response to store in MySQL
 */
class ChargeParser {

	/**
	 * keeps count of how many records
	 * were processed
	 * @var int
	 */
	public  $chargesProcessed;

	const OUTCOMES_KEY = 'outcome';
	const REFUNDS_KEY = 'refunds';
	const SOURCE_KEY = 'source';
	const METADATA_KEY = 'metadata';
	const FRAUD_DETAILS_KEY = 'fraud_details';

	/**
	 * Initial function to start processing
	 * Stripe API response
	 *
	 * @param  array $charges Stripe API response
	 * @return bool
	 */
	public function process($charges)
	{
		$this->chargesProcessed = count($charges['data']);

		if (isset($charges['data']['error']) && !empty($charges['data']['message'])) {
			return $charges['data']['message'];
		}

		foreach($charges['data'] as $response) {
			$this->processEachResponse($response);
		}

		return $this->chargesProcessed;
	}

	/**
	 * Process individual response array and prep
	 * for storage in MySQL
	 * @param  array $response individual charge response
	 * @return bool
	 */
	public function processEachResponse($response)
	{
		//substitue key "id" for "stripe_id"
		$response['stripe_id'] = $response['id'];
		unset($response['id']);

		$storage = new ChargeStorage;
		$result = $storage->store($response);
		if(!$result) {
			$this->chargesProcessed = 0;
		}

		return true;
	}


	public function calculator($first, $second) {
		return $first + $second;
	}

	public function subtractor($one, $two) {
		return $one - $two;
	}

	public function uncoveredFunction($x) {
		$var = 1 + 1;
		if ($var = 2) {
			$var = 1;
		}

		return $var;
	}

	public function getTen() {
		return 10;
	}

	public function getSeven() {
		return 7;
	}

	public function getEleven() {
		return 11;
	}

	public function uncoveredAnotherOne() {
		
	}
}