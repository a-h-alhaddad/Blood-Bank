<?php

namespace App\Models;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class Donor extends Authenticatable
{
    use HasFactory,
        Notifiable,
        CanResetPassword;
        
        protected $guard = 'donor';

        protected $fillable = [
            'name',
            'email',
            'password',
            'card',
            'address',
            'number',
            'blood_group_id',
        ];

        protected $hidden = [
            'password',
            'remember_token',
        ];

        protected $casts = [
            'email_verified_at' => 'datetime',
        ];

        public function blood_group()
{
    return $this->belongsTo(blood_group::class, 'blood_group_id');
}

}




