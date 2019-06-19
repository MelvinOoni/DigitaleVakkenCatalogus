<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestType extends Model
{
    // Test types
    protected $table = 'test_types';
    protected $guarded = ['id'];
}
