<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseOffInPatientFollowUp extends Model
{
    use HasFactory;
    protected $fillable=[

        'bp',
        'urine',
        'fhr',
        'odema',
        'remarks',
        'dr_id',
        'patient_id',
        'file_id'
    ];
}
