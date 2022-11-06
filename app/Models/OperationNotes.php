<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationNotes extends Model
{
    use HasFactory;  
      protected $fillabe =[
    

        'mode_of_de',
        'indication',
        'surgeon',
        'assistant',
        'anaesthetist',
        'anaesthesia',
        'incision',
        'procedure',
        'blood_loss',
        'ovaries',
        'baby_sex',
        'weight',
        'apgar_score',
        'refer_to_scbu',
        'treatment',


        'antibiotics',
        'analgesia',
        'anticoagulant',
        'ivfluuids',
        'blood',

        'recommendation_for_next',
        'comment',
        
        'dr_id',
        'patient_id',
        'file_id',
  


        
    ];


}
