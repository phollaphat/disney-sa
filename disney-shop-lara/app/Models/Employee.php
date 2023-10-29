<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;
    
    public function order(): HasMany
    {
        return $this->HasMany(Order::class);
    }

    public function claim(): HasMany
    {
        return $this->HasMany(Claim::class);
    }
    
}
