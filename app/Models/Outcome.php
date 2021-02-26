<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outcome extends Model
{
	/**
	 * mass assignment protection
	 */
	protected  $fillable = [
		'charge_id',
		'network_status',
		'reason',
		'risk_level',
		'seller_message',
		'rule',
		'type',
		'network_status'
	];

    /**
     * Get the charge record associated with the outcome.
     */
    public function charge()
    {
        return $this->belongsTo(Charge::class);
    }
}
