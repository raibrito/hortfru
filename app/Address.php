<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends RModel
{
    protected $table = 'addresses';
    protected $fillable = [
        'road', 'number', 'city', 'state', 'cep'
    ];

}
