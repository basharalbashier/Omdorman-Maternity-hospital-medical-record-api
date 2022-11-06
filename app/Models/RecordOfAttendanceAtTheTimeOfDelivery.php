<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordOfAttendanceAtTheTimeOfDelivery extends Model
{
    use HasFactory;
    protected $fillabe =[
    

        'reason_called_to_delivery',
        'mucous',
        'et_tube',
        'o_two_via_mask',
        'drug',
        'time_from_birth',
        'heart_one',
        'heart_five',
        'heart_ten',
        'resp_one',
        'resp_five',
        'resp_ten',
        'color_one',
        'color_five',


        'color_ten',
        'muscle_one',
        'muscle_five',
        'muscle_ten',
        'nasal_one',
        'nasal_five',

        'nasal_ten',
        'total_one',
        'total_five',
        'total_ten',
        'comment',


        
        'dr_id',
        'patient_id',
        'file_id',
  


        
    ];
}
