<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    //
    public function courses(){
        return $this->hasMany("App\course");
    }

    
}
