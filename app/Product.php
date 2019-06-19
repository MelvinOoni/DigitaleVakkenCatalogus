<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $table = "products";

    protected $fillable = [
        'id',
        'name'
    ];

    public $timestamps = false;
}
