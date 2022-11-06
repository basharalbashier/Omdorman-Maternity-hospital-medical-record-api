<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HaematologyResult extends Model
{
    use HasFactory;
    protected $fillabe =[
    

        'investigation',
        'result',
        'dr_id',
        'patient_id',
        'file_id',
  


        
    ];

}
