<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    
    public function productLists(): BelongsToMany
    {
        return $this->belongsToMany(ProductLists::class);

    }

    public function claim(): HasMany
    {
        return $this->HasMany(Claim::class);
    }

    public function warrant(): HasMany
    {
        return $this->HasMany(Warrant::class);
    }

}
