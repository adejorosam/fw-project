<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
    public function program()
    {
        return $this->belongsTo(program::class);
    }
}
