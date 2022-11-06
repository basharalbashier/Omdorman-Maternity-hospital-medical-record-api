<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewBornFirstDayExamination extends Model
{
    use HasFactory;

    protected $fillabe =[
    

        'baby_pcn',
        'sex',
        'immature',
        'length',
        'color',
        'head_circunference',
        'movement',
        'fontanelles',
        'eyes',
        'ears',
        'heart',
        'lungs',
        'femoral_pulse',
        'genitalia',
        'anus',
        'hip',
        'hip_abductions',
        'day_of_life',
        'state_of_awareness',
        'posture',
        'cry',
        'tone',
        'motor_activity',
        'turning_to_light',
         
        'head_and_face',
        'ventaral_suspension',
        'upright_suspension',
        'palmer_grasp',
        'moro',
        'hip_check',
        'normal',
        'review',

        'dr_id',
        'patient_id',
        'file_id',
  


        
    ];
}
