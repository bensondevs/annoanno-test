<?php

namespace App\Services;

use App\Contracts\Services\StripePaymentServiceInterface as IStripePaymentService

class StripePaymentService implements IStripePaymentService
{
	/**
	 * Set the stripe API secret key
	 * 
	 * @param  string
	 */
	public function setSecret(string $secret): string
	{
		//
	}

	/**
	 * Create payment to the stripe
	 * 
	 * @param  array  $paymentData
	 * @return array
	 */
	public function createPayment(array $paymentData)
	{
		//
	}
}