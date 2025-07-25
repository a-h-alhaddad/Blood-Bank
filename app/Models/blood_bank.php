<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class blood_bank extends Authenticatable
{
    use HasFactory,
    Notifiable,
    CanResetPassword;
    
    protected $guard = 'blood_bank';

    protected $fillable = [
        'name',
        'email',
        'description',
        'password',
        'address',
        'number',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
