<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductList extends Model
{
    use HasFactory, SoftDeletes;
    
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function productList(): HasMany
    {
        return $this->hasMany(peoductList::class);
    }
}
