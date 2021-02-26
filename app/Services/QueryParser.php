<?php

namespace App\Services;

/**
 * Parses query string to get data
 * for various charges
 */
class QueryParser {

	/**
	 * Available aggreagates
	 *
	 * @var array
	 */
	protected  $aggregates = [
		'count', 'max', 'min', 'avg', 'sum'
	];

	/**
	 * Necessary operands to build SQL queries
	 *
	 * @var array
	 */
	protected $operands = [
		'=' => '=',
		'[ne]' => '!=',
		'[gt]' => '>',
		'[gte]' => '>=',
		'[lt]' => '<',
		'[lte]' => '<=',
		'[like]' => 'like',
		'[not_like]' => 'not like'
	];

	/**
	 * Init array to hold qury conditions
	 */
	protected $conditions = [];

	/**
	 * Parses URL string into indivdual params
	 *
	 * @param  string $queryParams incoming query string/params
	 * @return array parsed conditions
	 */
	public function parse($queryParams)
	{
		$paramChunks = explode('&', $queryParams);
		foreach ($paramChunks as $param) {
			foreach (array_keys($this->operands) as $operand) {
				if (strpos($param, $operand) !== false) {
					$this->conditions[] = array_merge(explode($operand, $param), array($operand));
				}
			}
		}

		return $this;
	}

	/**
	 * Sort our query params conditions into eloquent format
	 * [COLUMN, OPERATOR, VALUE]
	 *
	 * @return array formatted conditions and aggregates array
	 * to use in Eloquent queries
	 */
	public function convertToEloquent()
	{
		$aggregates = [];
		$eloquentConditions = [];
		foreach ($this->conditions as $key => $row) {
			$column = $row[0];
			$value = $row[1];
			$operator = $this->operands[$row[2]];

			//make the string variable for LIKE query
			//NOTE: '%' in the front of string slows down performance
			if ($operator == 'like' || $operator == 'not like') {
				$value = '%' . $value . '%';
			}

			//need to convert to unix timestamp
			if ($column == 'from' || $column == 'to') {
				$value = strtotime($value);
				$column = 'created';
			}

			//are we trying to execute one of the aggregates?
			//prep aggregates for query builder / else add to conditions
			if (in_array($column, $this->aggregates)) {
				$aggregates['function'] = $column;
				$aggregates['field'] = $value;
			} else {
				$eloquentConditions[$key] = [$column, $operator, $value];
			}
		}

		return [$eloquentConditions, $aggregates];
	}
}