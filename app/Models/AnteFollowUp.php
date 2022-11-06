<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnteFollowUp extends Model
{
    use HasFactory;
    protected $fillable = [
        'bp',
        'ga',
        'fl',
        'pres',
        'eng',
        'fh',
        'hb',
        'urine',
        'comment',
        'next_visit',
        'dr_id',
        'patient_id',
        'file_id'
    ];
}
