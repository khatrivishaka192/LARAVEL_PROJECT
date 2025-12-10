<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Cake;

class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'email',
        'phone',
        'address',
        'total',
        //'status',
    ];


    public function cake() {
        return $this->belongsTo(Cake::class);
    }
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

}
