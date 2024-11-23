<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_Has_Order extends Model
{
    protected $fillable = ['products_id', 'orders_id'];
}
