<?php

namespace App\Contracts\Services;

interface PaymentServiceInterface
{
	/**
	 * Payment Provider API URL
	 * 
	 * @var string
	 */
	protected $providerApiUrl;

	/**
	 * Provider's request header
	 * 
	 * @var array
	 */
	protected $providerHeaders = [];

	/**
	 * Provider payment method value container
	 * 
	 * @var mixed
	 */
	private $paymentMethod;

	/**
	 * Service must implement set provider request header method
	 * 
	 * This method will set the header of the request to payment
	 * API provider using supplied array in argument
	 * 
	 * @param  array  $header
	 * @return void
	 */
	protected function setHeader(array $header): void;

	/**
	 * Service must implement a method for set payment method
	 * 
	 * This method will set the payment method
	 * 
	 * @param  int  $method
	 * @return self
	 */
	public function setPaymentMethod(int $method): self;
}