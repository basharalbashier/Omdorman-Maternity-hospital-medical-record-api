<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegularDrug extends Model
{
    use HasFactory;

    protected $fillable = [

        'drug',
        'dos',
        'route',
        'freaquency',

        'dr_id',
        'patient_id',
        'file_id',

    ];
}
