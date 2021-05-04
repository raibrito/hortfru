<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends RModel
{
    protected  $table = 'products';
    protected $fillable = ['name', 'value', 'photo', 'description', 'category_id'];
}
