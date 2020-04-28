<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function getFullNameAttribute()
    {
        return "{$this->subject_code} {$this->subject_description} {$this->subject_time}";
    }
}