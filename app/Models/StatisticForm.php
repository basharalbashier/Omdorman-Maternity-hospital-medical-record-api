<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatisticForm extends Model
{
    use HasFactory;

    protected $fillabe =[
    

        'number_of_documentation',
        'dep',
        'room',
        'address',
        'occu',
        'enter',
        'left',
        'final_diagnos',
        'diseeses',
        'is_accedent',
        'date_of_accedent',
        'diapeatic',
        'how_patient_left',
        'dr_id',
        'patient_id',
        'file_id',
  


        
    ];
}
