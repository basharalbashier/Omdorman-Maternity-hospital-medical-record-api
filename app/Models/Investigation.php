<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigation extends Model
{
    use HasFactory;
     
    protected $fillabe =[
    

        'investigation',
        'result',
        'patient_id',
        'file_id',
  


        
    ];
    
}
