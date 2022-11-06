<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionAssessmentForm extends Model
{
    use HasFactory;


    protected $fillabe =[
    

        'adm_medical_diagnosis',
        'anthropometric_date',
        'ht',
        'wt',
        'ibw',
        'bmi',
        'intake_diagestive_problem',
        'ngt',
        'npo',
        'physical_and_mental_state',
        'metabolic_stressors',
        'other',
        'phsical_appearance',
        'nutrition_risk_level',


        'need_based_on',
        'problem',
        'related_to',
        'as_evidenced_by',
        'breast_feeding',

        'after',
        'comment',
        
        'nurse_id',
        'patient_id',
        'file_id',
  


        
    ];
}
