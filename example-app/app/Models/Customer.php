<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'name'
    ]


    public function order()
    {
        return $this->hasMany(Order::class);
    }

    public function claim()
    {
        return $this->hasMany(claim::class);
    }


}
