<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class hospital extends Authenticatable
{
    use HasFactory,
        Notifiable,
        CanResetPassword;
        
        protected $guard = 'hospital';

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
        /**
         * Get all of the comments for the hospital
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function request()
        {
            return $this->hasMany(blood_bank_request::class, 'hospital_id');
        }

}
