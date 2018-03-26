<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    public function post()
    {
    	return $this->belongsTo('App\Model\user\Post','likes');
    }
}
