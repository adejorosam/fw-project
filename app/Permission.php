<?php

namespace App;

use Laratrust\Models\LaratrustPermission;

class Permission extends LaratrustPermission
{
    //
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}
