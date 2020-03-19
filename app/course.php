<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot(['progress','payment_id','payment_status','remaining_balance', 'repayment_date']);
    }

    public function program()
    {
        return $this->belongsTo("App\program");
    }
}
