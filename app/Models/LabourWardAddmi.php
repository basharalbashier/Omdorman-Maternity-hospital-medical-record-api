<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabourWardAddmi extends Model
{
    use HasFactory;


    protected $fillabe =[
    

        'unit',
        'gravida',
        'par',
        'lmp',
        'edd',
        'ga',
        'co',
        'relevant_past_history',
        'general_history',
        'pale',
        'bp',
        'pulse',
        'temp',
        'chest_and_cvs_exam',
        'fundal_height',
        'lie',
        'peresentation',
        'enagement',

        'amount_of_liquor',
        'fhr',
        'fm',
        'time_of_contrations_start',
        'dr_id',
        'patient_id',


        
    ];
}
