<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabourRecord extends Model
{
    use HasFactory;
    protected $fillable = [
   'cx_position',
   'effacement',
   'consistency',
   'dilatation',
   'station',
   'pre_position',
   'caput',
   'moulding',
   'intact',
   'fundel_height',
   'ruputred',
   'if_reuputred_time',
   'spontancous',
   'arm',
   'amount',
   'meconium',
   'special_instructions',
   'dr_id',
   'patient_id',
    ];
}
