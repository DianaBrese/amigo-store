<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductHasOrder extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['products_id', 'orders_id'];
}
