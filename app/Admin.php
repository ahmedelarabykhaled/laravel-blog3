<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    protected $fillable = ['name','email','password'];

    public function image()
    {
    	return $this->hasOne(Image::class , 'admin_id','id');
    }
}
