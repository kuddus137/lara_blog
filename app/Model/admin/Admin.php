<?php

namespace App\Model\admin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;

    public function roles()
    {
    	return $this->belongsToMany('App\Model\admin\Role');
    }

     protected $fillable = [
        'name', 'email', 'password','phone',
    ];

    public function getNameAttribute($values)
    {
    	return ucfirst($values);
    }
}
