<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Employee;
use App\Models\Customer;
use App\Models\Receipt;
class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'customer_phone',
        'user_id',
        'total_price',
        'date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
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
        return $this->hasOne(Receipt::class);
    }

}
