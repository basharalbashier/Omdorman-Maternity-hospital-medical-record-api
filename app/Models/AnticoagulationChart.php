<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnticoagulationChart extends Model
{
    use HasFactory;

    protected $fillabe=[

        'day',
        'tick_for_inr',
        'inr',
        'aptt',
        'apt',
        'dosage_of_warfarin',
        'nurse_id',
        'dr_id',
        'patient_id',
        'file_id'
    ];
}
