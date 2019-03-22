<?php
namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Coaches extends Authenticatable
{
    protected $guard = 'coach';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
   }
