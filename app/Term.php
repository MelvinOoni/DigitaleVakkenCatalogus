<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $fillable = ['id', 'title', 'image', 'number', 'description', 'semester'];

    public $timestamps = false;
}
