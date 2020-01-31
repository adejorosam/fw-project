<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function program()
    {
        return $this->belongsTo("App\program");
    }
}
