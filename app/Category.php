<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends RModel
{
    protected  $table = 'categories';
    protected $fillable = ['category'];
}
