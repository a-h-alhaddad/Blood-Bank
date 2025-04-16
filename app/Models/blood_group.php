<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blood_group extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
    ];

    public function donor()
    {
        return $this->hasOne(Donor::class);
    }
}
