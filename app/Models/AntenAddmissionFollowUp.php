<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntenAddmissionFollowUp extends Model
{
    use HasFactory;

    protected $fillabe=[
      
        'follow_instr',
        'patient_id',
        'dr_id',
        'file_id'
    ];
}
