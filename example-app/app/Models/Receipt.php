<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'receipt_id',
        'order_id',
        'payment_channel',
        'date_time'
    ]    

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Define the hasMany relationship with WarrantyCard
    public function warrantyCards()
    {
        return $this->hasMany(WarrantyCard::class);
    }
}
