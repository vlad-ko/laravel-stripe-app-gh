<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Charge extends Model
{
    use HasFactory;
    
	/**
	 * define constants and strings for
	 * various states
	 */
	const STATUS_SUCCESS = 'succeeded';
	const STATUS_PENDING = 'pending';
	const STATUS_FAILED = 'failed';

	/**
	 * skip these specific fields for DB storage
	 * filter out extra fields which will be in the related tables
	 * (inverse of $fillable)
	 */
	protected  $guarded = [
		'outcome',
		'refunds',
		'source',
		'metadata',
		'fraud_details'
	];

    /**
     * Get the outcome record associated with the charge.
     */
    public function outcome()
    {
        return $this->hasOne(Outcome::class);
    }

    /**
     * Get the refund record associated with the charge.
     */
    public function refund()
    {
        return $this->hasMany(Refund::class);
    }

    /**
     * Get data to populate the report table
     *
     * @return array data for the report
     */
    public function getDataForReport()
    {
    	$data = Charge::with('outcome')->get()->toArray();
        return $data ? $data : null;
    }

    public function uncoveredUnitTestFunction() {
        return 'data';
    }

    public function unitTestModel() {
        return 'data';
    }

    public function testNotCoveredChanged() {
        return 42;
    }

    public function uncoveredFunction() {
        return 80;
    }
 }
