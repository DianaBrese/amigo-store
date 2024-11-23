<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'email', 'password', 'address_street', 'address_number', 'address_neibourhood', 'address_city', 'address_code'];
}
