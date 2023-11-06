<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WarrantyCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'warranty_id',
        'receipt_id',
        'end_date',
        'start_date',
        'product_id',
    ];


    public function receipt()
    {
        return $this->belongsTo(Receipt::class);
    }
}
