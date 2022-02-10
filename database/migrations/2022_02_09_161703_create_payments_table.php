<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Enums\PaymentStatus;
use App\Models\StripePayment;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable(); // As the owner of the payment
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('SET NULL');

            // Polymorphic relationship
            // This means that payment can be attached into
            // any table that can be paid
            $table->morphs('paymentable');

            // To decide which payment provider to be chosen
            $table->string('payment_provider')
                ->default(StripePayment::class);

            // Payment related informations
            $table->tinyInteger('status')
                ->default(PaymentStatus::WaitingForPayment);
            $table->double('amount', 10, 2);
            $table->datetime('due_date');
            $table->longText('note')->nullable();

            $table->timestamps();
            $table->timestamp('waited_for_payment_at')->nullable();
            $table->timestamp('processed_at')->nullable();
            $table->timestamp('settled_at')->nullable();
            $table->timestamp('expired_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
};
