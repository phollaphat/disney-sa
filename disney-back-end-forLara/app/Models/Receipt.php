<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Receipt extends Model
{
    use HasFactory;

        // protected $casts = [
        //     'date' => 'datetime:Y-m-d',
        // ];

    protected $fillable = [
        'order_id',
        'payment_channel',
        'date'
    ];    

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Define the hasMany relationship with WarrantyCard
    public function warrantyCard()
    {
        return $this->hasMany(WarrantyCard::class);
    }
}
