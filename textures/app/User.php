<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Eloquent implements Authenticatable
{
    use AuthenticableTrait;
   //use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //protected $fillable = [
      //  'name', 'email', 'password',
    //];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    //protected $hidden = [
      //  'password', 'remember_token',
    //]
    //;
    protected  $table='users';
    protected $fillable = ['name', 'email', 'password'];

}
