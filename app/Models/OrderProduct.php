<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $table = 'order_product';

    protected $guarded = [];

    public $timestamps = false ;

    function product(){
        return $this->belongsTo(Product::class);
    }

}