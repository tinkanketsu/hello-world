<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = "users";

    protected $hidden = array('password', 'remember_token');
    public $timestamps = true;

    public function profile(){
       return $this->hasOne('App\Model\Profile');
    }
    
}