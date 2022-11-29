<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientFile extends Model
{
    use HasFactory;
    protected $fillable = [
        'unit',
        'booking',
        'residance',
        'husband',
        'husband_tel',
        'husband_occup',
        'patient_id',
        'user_id'
    ];
}
