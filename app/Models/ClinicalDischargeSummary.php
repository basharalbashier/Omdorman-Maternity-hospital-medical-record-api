<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicalDischargeSummary extends Model
{
    use HasFactory;


    protected $fillable=[

        'fingal_diagnosis',
        'summary',
        'operation_with_dates',
        'treatment_recommended',
        'follow_up_arrangements',
        'treating_physion',
        'hospital',
        'signed',
        'dr_id',
        'patient_id',
        'file_id'
    ];
}
