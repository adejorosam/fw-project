<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    //
    public function users(){
        return $this->belongsToMany(User::class)->withPivot('course_id');
    }

    // public function courses(){
    //     return $this->belongsToMany(course::class);
    // }
}
