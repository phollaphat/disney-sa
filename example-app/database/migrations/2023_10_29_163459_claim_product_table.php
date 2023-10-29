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
        Schema::table('claim', function (Blueprint $table) {
            $table->id();
            $table->foreign('claim_id')->references('id')->on('claim');

            $table->timestamps('date');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('customer_number');
            $table->unsignedBigInteger('waranty_id');
           

            $table->foreign('product_id')->references('id')->on('product');
            $table->foreign('employee_id')->references('id')->on('emplayee');
            $table->foreign('customer_number')->references('number')->on('customer');
            $table->foreign('waranty_id')->references('id')->on('waranty_card');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('claim');
    }
};
