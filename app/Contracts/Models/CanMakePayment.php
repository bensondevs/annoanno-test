<?php

namespace App\Contracts\Models;

use Illuminate\Database\Eloquent\Relations\MorphTo;

interface CanMakePayment
{
	/**
	 * Model must implement set payment parent status
	 * 
	 * @param  int  $status
	 * @return bool
	 */
	public function setPaymentStatus(int $status): bool;

	/**
	 * Model must implement model mutator of `payment_amount`
	 * 
	 * @return  float
	 */
	public function getPaymentAmountAttribute(): float;

	/**
	 * Model must have and implement payment relationship
	 * 
	 * @return Illuminate\Database\Eloquent\Relations\MorphTo
	 */
	public function payment(): MorphTo;
}