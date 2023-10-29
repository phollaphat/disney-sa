<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cliam extends Model
{
    use HasFactory;

    protected $fillable = [
        'warantyCard_id',
        'user_id',
        'customer_id',
        'product_id',
        'date',
    ];


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function waranty()
    {
        return $this->belongsTo(Customer::class);
    }


}
