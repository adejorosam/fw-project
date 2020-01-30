<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    //
    public function courses(){
        return $this->hasMany(course::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
