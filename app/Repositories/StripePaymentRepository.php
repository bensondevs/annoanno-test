<?php

namespace App\Repositories;

use App\Models\{ StripePayment, PaymentMethod, CreditCard };

class StripePaymentRepository
{
	/**
	 * Stripe service class container
	 * 
	 * @var  \App\Services\StripePaymentService
	 */
	private $stripe;

	/**
	 * Repository constuctor method
	 * 
	 * @return void
	 */
	public function __construct(): void
	{
		//
	}

	/**
	 * Save stripe payment to the database
	 * 
	 * @param  array  $paymentResponse
	 * @return \App\Models\StripePayment
	 */
	public function savePayment(array $paymentResponse): StripePayment
	{
		//
	}
}