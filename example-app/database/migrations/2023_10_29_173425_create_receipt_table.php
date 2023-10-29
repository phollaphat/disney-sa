<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('receipt', function (Blueprint $table) {
            $table->id();
        $table->unsignedBigInteger('receipt_id');
        $table->unsignedBigInteger('order_id');
        $table->string('payment_channel');
        $table->dateTime('date_time');
        $table->timestamps();

        $table->foreign('receipt_id')->references('id')->on('orders');
        $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipt');
    }
};
