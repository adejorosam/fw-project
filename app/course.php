<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
    public function programs()
    {
        return $this->belongsTo('App\program');
    }
}
