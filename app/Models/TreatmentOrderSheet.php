<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreatmentOrderSheet extends Model
{
    use HasFactory;

    protected $fillable=[
     
        'treatment',
        'start_date',
        'end_date',
        'patient_id',
        'file_id',
        'dr_id',
    ];
}
