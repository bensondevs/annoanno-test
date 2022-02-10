<?php

namespace App\Contracts\Services;

use App\Models\CreditCard;

interface StripePaymentServiceInterface extends PaymentServiceInterface
{
	/**
	 * Stripe API secret container
	 * 
	 * @var string
	 */
	protected $secret;

	/**
	 * Service must implement the set secret method
	 * 
	 * This method will set the stripe API secret
	 * 
	 * @param  string  $secret
	 * @return void
	 */
	public function setSecret(string $secret): void;

	/**
	 * Service must implement one off payment method
	 * 
	 * This method will execute the one off payment to provider
	 * 
	 * @param  array  $paymentData
	 * @return array
	 */
	public function makeOneOffPayment(array $paymentData): array;

	/**
	 * Service must implement handle callback method
	 * 
	 * This method will execute
	 * 
	 * @param  array  $callbackData
	 * @return array
	 */
	public function handleCallback(array $callbackData): array;

	/**
	 * Service must implement check payment method
	 * 
	 * This method will check payment information
	 * to the payment provider
	 * 
	 * @param  mixed  $reference
	 * @return array
	 */
	public function checkPayment($reference): array;
}