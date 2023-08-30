<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false ;

    function customer(){
        return $this->belongsTo(Customer::class);
    }
    function products(){
        return $this->hasMany(OrderProduct::class);
    }
}
