<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsRequiredAndPostOperativeDruge extends Model
{
    use HasFactory;
//////notcompeleated
    protected $fillable=[

        'drug_approved',
        'dose',
        'route',
        'frequency',
        'total_number_of_dose',
        'start',
        'stop',
        'pharm',
        'dr_id',
        'patient_id',
        'file_id'
    ];
}
