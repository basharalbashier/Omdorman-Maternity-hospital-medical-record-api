<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntAddm extends Model
{
    use HasFactory;




    protected $fillable = [
        'unit',
        'complaint',
        'history_presenting_illness',
        'pulse',
        'bp',
        'temp',
        'general_condition',
        'cvs_chest_examination',
        'fundel_height',
        'lie',
        'presentation',
        'fhr',
        'fm',
        'vaginal_exam',
        'diagnosis',
        'immediat_instrunction',
        'dr_id',
        'patient_id',
        'file_id'
    ];
}
