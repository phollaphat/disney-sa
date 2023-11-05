<?php

use App\Models\Customer;
use App\Models\Product;
use App\Models\User;
use App\Models\WarantyCard;
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
        Schema::create('_claims', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(WarantyCard::class);
            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Customer::class);
            $table->foreignIdFor(Product::class);
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_claims');
    }
};
