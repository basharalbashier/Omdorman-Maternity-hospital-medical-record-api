<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorProgressNote extends Model
{
    use HasFactory;
    protected $fillable=[

        'status',
        'patient_condition',
        'investigation',
        'instruction',
        'dr_id',
        'patient_id',
        'file_id'
    ];
}
