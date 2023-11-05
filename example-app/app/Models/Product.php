<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Tymon\JWTAuth\Claims\Claim;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'model_code',
        'image_path',
        'category',
        'name',
        'price',
        'size',
        'stock_quantity'
    ];

    public function productList(): BelongsToMany
    {
        return $this->belongToMany(ProductList::class);
    }

    public function waranty(): BelongsToMany
    {
        return $this->belongToMany(WarantyCard::class);
    }

    public function claim(): BelongsToMany
    {
        return $this->belongToMany(Claim::class);
    }
    
}
