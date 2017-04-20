<?php

namespace App\models;

//use Eloquent;

//use Illuminate\Auth\Authenticatable as AuthenticableTrait;
//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Auth\Passwords\CanResetPassword as CabResetPasswordTrait;
//use Illuminate\Contracts\Auth\Authenticatable;
//use Illuminate\Contracts\Auth\CanResetPassword;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    protected $table = 'user';

    //use Authenticatable, CanResetPassword;

    //public function getAuthIdentifierName();
    //public function getAuthIdentifier();
    //public function getAuthPassword();

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}

?>