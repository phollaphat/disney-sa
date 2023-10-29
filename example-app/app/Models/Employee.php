<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Order;
use App\Models\Claim;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'username',
        'phone_number',
        'email',
        'password',
        'role',
        'employee_id'
    ]

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function claiming()
    {
        return $this->hasMany(Claim::class);
    }

    // Many-to-many relationship with Order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
