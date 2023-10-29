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
        Schema::table('waranty_card', function (Blueprint $table) {
        $table->id();
        $table->foreign('waranty_id')->references('id')->on('waranty_card');

        $table->unsignedBigInteger('receipt_id');
        $tabke->unsignedBigInteger('product_id')
        $table->timestamps('stat_date');
        $table->timestamps('end_date');
    

        $table->foreign('receipt_id')->references('id')->on('receipt');
        $table->foreign('product_id')->references('id')->on('products');
        

            
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('waranty_card');
    }
};
