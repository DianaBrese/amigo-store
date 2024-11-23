<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['clients_id','status', 'delivery_address_street','delivery_address_number', 'delivery_address_neibourhood', 'delivery_address_city', 'delivery_address_code', 'freight_price', 'products_price', 'total_price'];
}
