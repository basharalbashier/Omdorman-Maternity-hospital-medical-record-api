<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('icu_follow_ups', function (Blueprint $table) {
            $table->id();
            $table->string('init_diag')->nullable();
            $table->text('icu_diag')->nullable();
            $table->text('pro_one')->nullable();
            $table->text('pro_two')->nullable();
            $table->text('pro_three')->nullable();
            $table->text('pro_four')->nullable();
            $table->text('brif_history')->nullable();
            $table->text('recent_in_24')->nullable();
            $table->string('gcs')->nullable();
            $table->string('e')->nullable();
            $table->string('v')->nullable();
            $table->string('m')->nullable();
            $table->string('fifteen')->nullable();
            $table->string('pup_y')->nullable();
            $table->string('pup_n')->nullable();
            $table->string('react_y')->nullable();
            $table->string('react_n')->nullable();
            $table->string('sedat_drug')->nullable();
            $table->string('analgesia')->nullable();
            $table->string('paraly')->nullable();
            $table->string('anti')->nullable();
            $table->string('sedation')->nullable();
            $table->text('ct')->nullable();
            $table->text('mri')->nullable();
            $table->string('pulse')->nullable();
            $table->string('bp')->nullable();
            $table->text('vassopr')->nullable();
            $table->text('inotro')->nullable();
            $table->text('ecg_echo')->nullable();
            $table->string('with_o2')->nullable();
            $table->string('without_o2')->nullable();
            $table->string('pulmonary_rr')->nullable();
            $table->string('spo2')->nullable();
            $table->text('chest_exam')->nullable();
            $table->string('fio2')->nullable();
            $table->string('peep')->nullable();
            $table->string('map')->nullable();
            $table->string('po2')->nullable();
            $table->string('mode')->nullable();
            $table->string('vt')->nullable();
            $table->string('rr')->nullable();
            $table->string('pip')->nullable();
            $table->string('platea')->nullable();
            $table->string('resistance')->nullable();
            $table->string('compliance')->nullable();
            $table->string('rsbi')->nullable();
            $table->string('nif')->nullable();
            $table->text('git')->nullable();
            $table->text('us')->nullable();
            $table->text('fetal_heart')->nullable();
            $table->text('surgical_drains')->nullable();
            $table->string('postive_culture_site')->nullable();
            $table->string('organism')->nullable();
            $table->string('sensitive_to')->nullable();
            $table->string('central_site')->nullable();
            $table->string('catheter_days')->nullable();
            $table->string('drains')->nullable();
            $table->string('ett')->nullable();
            $table->string('na')->nullable();
            $table->string('k')->nullable();
            $table->string('ci')->nullable();
            $table->string('bicarb')->nullable();
            $table->string('po4')->nullable();
            $table->string('bun')->nullable();
            $table->string('cr')->nullable();
            $table->string('avg')->nullable();
            $table->string('intake')->nullable();
            $table->string('output')->nullable();
            $table->string('fluid')->nullable();
            $table->string('stress_ulcer')->nullable();
            $table->string('feeding')->nullable();
            $table->string('dvt')->nullable();
            $table->string('activity_pt')->nullable();
            $table->text('plan_of_management')->nullable();
            $table->string('dr_id');
            $table->string('patient_id');
            $table->string('file_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('icu_follow_ups');
    }
};
