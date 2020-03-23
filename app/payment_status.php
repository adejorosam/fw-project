<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment_status extends Model
{
    //
    public function users(){
        return $this->belongsToMany(User::class);
    }

    public function payments(){
        return $this->hasMany(payment::class);
    }

}
