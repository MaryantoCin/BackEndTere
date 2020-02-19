<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'leader_name',
        'leader_address',
        'leader_email',
        'leader_birthplace',
        'leader_birthdate',
        'leader_number',
        'leader_line',
        'leader_github',
        'leader_cv',
        'leader_project',
        'member1_name',
        'member1_address',
        'member1_email',
        'member1_birthplace',
        'member1_birthdate',
        'member1_number',
        'member1_line',
        'member1_github',
        'member1_cv',
        'member1_project', 
        'member2_name',
        'member2_address',
        'member2_email',
        'member2_birthplace',
        'member2_birthdate',
        'member2_number',
        'member2_line',
        'member2_github',
        'member2_cv',
        'member2_project',
        'payment_status',
        'payment_image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
