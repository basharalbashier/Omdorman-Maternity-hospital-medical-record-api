<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabourWardInst extends Model
{
    use HasFactory;
    protected $fillabe=[
        'instructions',
        'patient_id',
        'dr_id',
    ];
}
