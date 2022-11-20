<?php  

namespace App;  

use Illuminate\Notifications\Notifiable;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Laravel\Passport\HasApiTokens;  //NEW

use Illuminate\Foundation\Auth\User as Authenticatable;
  

class User extends Authenticatable implements MustVerifyEmail

{

    use HasApiTokens, Notifiable;   //NEW

      protected $fillable = [

        'name', 'email', 'password',

    ];

  
  protected $hidden = [

        'password', 'remember_token',

    ];

}