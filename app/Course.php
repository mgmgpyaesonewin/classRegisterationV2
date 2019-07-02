<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function seminars()
    {
        return $this->hasMany('App\Seminar');
    }
}
