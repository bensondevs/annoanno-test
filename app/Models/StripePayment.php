<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Contracts\Models\CanMakePayment;

class StripePayment extends Model implements CanMakePayment
{
    use HasFactory;

    /**
     * This will create new callable attribute of `payment_amount`
     * This callable attribute will return amount that should be paid
     * 
     * @return  float
     */
    public function getPaymentAmountAttribute(): float
    {
        //
    }

    /**
     * Set parent's payment status
     * 
     * @param  int  $status
     * @return bool
     */
    public function setPaymentStatus(int $status): bool
    {
        //
    }

    /**
     * Get parent's payment relationship
     * 
     * @return Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function payment()
    {
        //
    }
}
