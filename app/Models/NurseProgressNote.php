<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NurseProgressNote extends Model
{
    use HasFactory;


    protected $fillable =[
    

        'temp',
        'puls_rate',
        'resp_rate',
        'bp',
        'urine_output_n',
        'urine_output_d',
        'level_of_conaciouances',
        'o_two',
        'odema_general',
        'odema_ll',
        'urine_acetone',
        'urine_sugar',
        'urine_protein',
        'skin_color',
        'remarks',
        'nurse_id',
        'patient_id',
        'file_id',
  


        
    ];
}
