<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class ProductList extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'image_path',
        'quantity',
        'price_sum'
    ];

    public function product(): HasMany
    {
        return $this->hasMany(ProductList::class);
    }
}
