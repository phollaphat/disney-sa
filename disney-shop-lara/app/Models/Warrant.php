<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warrant extends Model
{
    use HasFactory, SoftDeletes;
    
    public function receipt(): BelongsTo
    {
        return $this->belongsTo(Receipt::class);

    }
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);

    }

}
