<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Receipt extends Model
{
    use HasFactory, SoftDeletes;
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function warrant(): hasMany
    {
        return $this->belongsTo(Warrant::class);
    }
}
