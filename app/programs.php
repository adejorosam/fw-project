<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programs extends Model
{
    //
    public function users()
    {
        return $this->belongsToMany(programs::class);
    }
}
