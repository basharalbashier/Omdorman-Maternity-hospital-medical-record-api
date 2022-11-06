<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestigationRequestForm extends Model
{
    use HasFactory;

    protected $fillable=[

        'unit',
        'word',
        'bed_no',
        'clinical_remarks',
        'cxr',
        'echo',
        'us',
        'ivu',
        'ct',
        'mri',
        'others',
        'result',
        'dr_id',
        'patient_id',
        'file_id'
    ];
}
