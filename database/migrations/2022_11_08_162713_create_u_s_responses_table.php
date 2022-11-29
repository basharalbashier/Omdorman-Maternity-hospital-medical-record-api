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
        Schema::create('u_s_responses', function (Blueprint $table) {
            $table->id();
            $table->string('number_of_pregnancies')->nullable();
            $table->string('fetal_heart');
            $table->string('presentation')->nullable();
            $table->string('bpd')->nullable();
            $table->string('bpd_week')->nullable();
            $table->string('hc')->nullable();
            $table->string('hc_week')->nullable();
            $table->string('fl')->nullable();
            $table->string('fl_week')->nullable();
            $table->string('ac');
            $table->string('ac_week');
            $table->string('crl');
            $table->string('crl_week');
            $table->string('efw');
            $table->string('uss_edd')->nullable();
            $table->string('placental_site')->nullable();
            $table->string('placental_site_comm')->nullable();
            $table->string('mvp')->nullable();
            $table->text('structural_abnormalities')->nullable();
            $table->string('biophysical_profile')->nullable();
            $table->string('doppler_edf')->nullable();
            $table->string('comm')->nullable();
            $table->string('seen_at')->nullable();
            $table->string('request_id');
            $table->string('dr_id');
            $table->string('patient_id');
            $table->string('file_id');
            $table->string('money')->nullabe();
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
        Schema::dropIfExists('u_s_responses');
    }
};
