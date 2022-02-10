<?php

namespace App\Enums;

class PaymentStatus
{
	/**
	 * Credit card record is created in local databse
	 * 
	 * @var int
	 */
	const CreatedInLocal = 1;

	/**
	 * Credit card record is created in provider
	 * 
	 * @var int
	 */
	const CreatedInProvider = 2;

	/**
	 * Credir card is inactivated by user
	 * 
	 * @var int
	 */
	const Inactive = 3;
}