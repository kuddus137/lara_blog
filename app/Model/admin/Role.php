<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [ 'name','permission_for' ];

    public function permissions()
    {
    	return $this->belongsToMany('App\Model\admin\Permission');
    }
}
