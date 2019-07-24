<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    const ROLE_ADMIN=1;
    const ROLE_USER=2;

    protected $fillable = [
        'name', 'email', 'password', 'phone','role', 'avatar',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->role == self::ROLE_ADMIN;
    }

    public function isOperator()
    {
        return $this->role == self::ROLE_OPERATOR;
    }

}
