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
        'Identification_number', 'password',
        'api_token','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
   // protected $casts = [
   //     'email_verified_at' => 'datetime',
   // ];


    public function role()
    {
        return $this->belongsTo(Role::class);
    }


    public  function doctor(){
        return $this->hasOne(Doctor::class);
    }


    public  function patient(){
        return $this->hasOne(Patient::class);
    }


    public  function employee(){
        return $this->hasOne(Employee::class);
    }


    public  function nurse(){
        return $this->hasOne(Nurse::class);
    }

}
