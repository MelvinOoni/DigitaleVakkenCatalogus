<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // Tests
    protected $table = 'tests';
    protected $guarded = ['id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
