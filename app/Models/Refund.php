<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
	/**
	 * mass assignment protection
	 */
	protected  $fillable = [
		'charge_id',
		'amount',
		'balance_transaction',
		'created',
		'currency',
		'description',
		'metadata',
		'reason',
		'receipt_number',
		'status',
	];

	/**
	 * define constant string for
	 * various states
	 */
	const STATUS_SUCCESS = 'succeeded';
	const STATUS_PENDING = 'pending';
	const STATUS_FAILED = 'failed';
	const STATUS_CANCELLED = 'cancelled';

    /**
     * Get the charge record associated with the refund.
     */
    public function charge()
    {
        return $this->belongsTo(Charge::class);
    }
}
