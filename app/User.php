<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table    = "users";

    protected $fillable = ['first_name', 'last_name', 'birthdate', 'department', 'municipality', 'address', 'phone', 'photo', 'email', 'password', 'dpi', 'type',];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function solicitud()
    {
        return $this->hasOne('App\Solicitud');
    }
}
