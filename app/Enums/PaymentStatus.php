<?php

namespace App\Enums;

class PaymentStatus
{
	/**
	 * Payment status is waiting for payment
	 * 
	 * @var int
	 */
	const WaitingForPayment = 1;

	/**
	 * Payment status is processing
	 * 
	 * @var int
	 */
	const Processing = 2;

	/**
	 * Payment status is settled
	 * 
	 * @var int
	 */
	const Settled = 3;

	/**
	 * Payment is confirmed by admin
	 * 
	 * @var int
	 */
	const Confirmed = 4;

	/**
	 * Payment status is failed
	 * 
	 * @var int
	 */
	const Failed = 5;

	/**
	 * Payment status is expired
	 * 
	 * @var int
	 */
	const Expired = 6;
}