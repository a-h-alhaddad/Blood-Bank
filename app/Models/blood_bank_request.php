<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blood_bank_request extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
    'id',
    'date',
    'quantity',
    'blood_group_id',
    'hospital_id',
    'blood_bank_id'
];


public function blood_group()
{
    return $this->belongsTo(blood_group::class, 'blood_group_id');
}


public function hospital()
{
    return $this->belongsTo(hospital::class, 'hospital_id');
}


public function blood_bank()
{
    return $this->belongsTo(blood_bank::class, 'blood_bank_id');
}
}
