<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blood_stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'blood_group_id',
        'quantity',
        'expiration_date',
    ];

    public function blood_group()
{
    return $this->belongsTo(blood_group::class, 'blood_group_id');
}
}
