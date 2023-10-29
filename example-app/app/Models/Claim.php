<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cliam extends Model
{
    use HasFactory;

    protected $fillable = [
        'claim_id',
        'date',
        'product_id',
        'employee_id',
        'customer_number',
        'date'
    ]


    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
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
