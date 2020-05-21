<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hash,Auth,Session,Mail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    protected $table = 'users';

        protected $fillable = [
        'name', 'email', 'password', 'is_admin'
    ];
}
