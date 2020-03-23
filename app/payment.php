<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    //
    public function payment_status(){
        return $this->belongsTo(payment_status::class);
    }

    public function users(){
        return $this->belongsToMany(payment::class);
    }
}

// public function privilege(){
//         return $this->belongsTo(privilege::class);
//     }