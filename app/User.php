<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function phone()
    {
        return $this->hasOne(Models\Phone::class);
    }

    public function vehicle()
    {
        return $this->hasOne(Models\Vehicle::class);
        //return $this->hasMany(Models\Vehicle::class);   /** um para muitos */
    }

    public function complement()
    {
        return $this->hasOne(Models\Complement::class);
    }

    public function relative()
    {
        return $this->hasOne(Models\Relative::class);
    }

    // public function getBirthAttribute($value)
    // {
    //     return
    // }
}
