<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use App\Models\Customer;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'employee_id',
        'product_id',
        'customer_phone',
        'total_price',
        'date_time'
    ]

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    // Define the belongsTo relationship with Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function productLists()
    {
        return $this->hasMany(ProductList::class);
    }

    public function receipt()
    {
        return $this->belongsTo(Receipt::class);
    }

}
