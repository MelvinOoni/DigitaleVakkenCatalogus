<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [
        'id'
    ];

    public function terms()
    {
        return $this->hasOne(Term::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }
}
