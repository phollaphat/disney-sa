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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
        $table->string('fullname')->unique();
        $table->string('username')->unique();
        $table->integer('phone_number')->length(10);
        $table->string('email')->unique();
        $table->string('password');
        $table->enum('role', ['admin', 'employee', 'customer']);
        $table->unsignedBigInteger('employee_id')->nullable();
        $table->timestamps();
        $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
