<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    use HasFactory;


    public $timestamps = false;
    protected $fillable = ['name', 'email', 'password', 'address_street', 'address_number', 'address_neibourhood', 'address_city', 'address_code'];
}
