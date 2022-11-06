<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryAndPostnatal extends Model
{
    use HasFactory;

    protected $fillable=[

        'mode_of_delivery',
        'placenta',
        'episiotomy',
        'decircumcision',
        'lactation',
        'anti_d',
        'blood_loss',
        'comment',
        'baby_sex',
        'weight',

        'apgar',
        'refer_to_scbu',
        'postnatal_follow_up',
        'date_of_discharge',

        'dr_id',
        'patient_id',
        'file_id'
    ];
}
