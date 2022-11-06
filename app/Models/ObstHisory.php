<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObstHisory extends Model
{
    use HasFactory;




    protected $fillable = [
        'unit',
        'dr_id',
        'patient_id',
        'gr',
        'para',
        'note',
        'lmp',
        'edd',
        'scan_edd',
        'past_m_history',
        'past_s_history',
        'drug_history',
        'social_history',
        'family_history',
        'others',
        'chest_cvs_exam',
        'comments_and_social_plans',
    ];
}
