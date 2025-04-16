<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donor_request extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'blood_group_id',
        'date',
    ];

    public function blood_group()
{
    return $this->belongsTo(blood_group::class, 'blood_group_id');
}
}
