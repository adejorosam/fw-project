<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;




class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'privilege_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses(){
        return $this->belongsToMany(course::class)->withPivot(['progress','payment_id','payment_status','remaining_balance', 'repayment_date']);
    }

    public function payment_statuses(){
        return $this->belongsToMany(payment_status::class);
    }

    public function payments(){
        return $this->belongsToMany(payment::class);
    }

    public function assignments(){
        return $this->belongsToMany(Assignment::class)->withPivot('course_id');
    }

    public function privilege(){
        return $this->belongsTo(privilege::class);
    }
   
}

