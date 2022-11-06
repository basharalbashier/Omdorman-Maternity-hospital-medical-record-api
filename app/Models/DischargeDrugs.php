<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DischargeDrugs extends Model
{
    use HasFactory;

    protected $fillable=[

        'drugs',
        'dose',
        'route',
        'frequency',
        'number_of_days',
        'remarks',
        'dr_id',
        'patient_id',
        'file_id'
    ];
}
