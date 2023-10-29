<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'tel',
        'name'
    ];


    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function claims()
    {
        return $this->hasMany(claim::class);
    }


}
