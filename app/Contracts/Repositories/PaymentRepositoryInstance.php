<?php

namespace App\Contracts\Repositories;

use App\Contracts\Services\PaymentServiceInterface as IPaymentService;

interface PaymentRepositoryInterface extends RepositoryInterface
{
	/**
	 * Payment service class container
	 * 
	 * @var  \App\Contracts\Services\PaymentServiceInterface
	 */
	protected $paymentService;

	/**
	 * Payment's payer model class container
	 * 
	 * @var  \App\Contracts\Models\CanMakePayment
	 */
	private $payer;

	/**
	 * Payment Repository must implement set payment service
	 * 
	 * This method will set the payment service class in the
	 * repository class. The payment service class will handle
	 * the required payment provider processes
	 * 
	 * @param  IPaymentService  $iPaymentService
	 * @return $this
	 */
	public function setPaymentService(IPaymentService $iPayService): self;
}