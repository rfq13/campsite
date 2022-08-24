<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->enum('booking_status', ['booked', 'checkin', 'checkout'])->default('booked');
            $table->enum('payment_status', ['pending', 'paid', 'cancelled'])->default('pending');

            // booked -> belum checkin
            // checkin -> sedang checkin
            // checkout -> sudah checkin

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
