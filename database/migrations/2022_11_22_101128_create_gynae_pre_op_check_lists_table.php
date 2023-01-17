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
        Schema::create('gynae_pre_op_check_lists', function (Blueprint $table) {
            $table->id();
            $table->text('operation_procedure')->nullable();
            $table->text('allerg')->nullable();
            $table->string('pre_mid')->nullable();
            $table->string('wt')->nullable();
            $table->string('consent')->nullable();
            $table->string('pre_op')->nullable();
            $table->string('bp')->nullable();

            $table->string('temp')->nullable();
            $table->string('pulse')->nullable();
            $table->string('lmp')->nullable();
            $table->string('parity')->nullable();
            $table->string('anointed')->nullable();
            $table->string('fasting_since')->nullable();
            $table->string('urinalysis')->nullable();
            $table->string('chest_xray')->nullable();
            $table->string('hb')->nullable();
            $table->string('ecg')->nullable();
            $table->string('urea_elects')->nullable();
            $table->string('groped_xmatched')->nullable();
            $table->string('group_hold')->nullable();
            $table->string('blood_in_hospital')->nullable();
            $table->string('identiband')->nullable();
            $table->text('dentures')->nullable();
            $table->string('prothesis')->nullable();
            $table->string('contact')->nullable();
            $table->text('bladder')->nullable();
            $table->text('allergies')->nullable();
            $table->text('jawellery_removed')->nullable();
            $table->text('covered')->nullable();
            $table->text('prep_shave')->nullable();
            $table->string('bath')->nullable();
            $table->string('nails')->nullable();
            $table->string('epidural')->nullable();
            $table->string('catheter')->nullable();
            $table->string('special_pre')->nullable();
            $table->text('pregnancy_test')->nullable();
            $table->string('theater_midwife')->nullable();
            $table->text('main_pre')->nullable();
            $table->text('intercurrent')->nullable();
            $table->text('allergy_to_any')->nullable();
            $table->text('drug_therapy')->nullable();
            $table->text('no_steroid')->nullable();
            $table->text('blood_ordered')->nullable();

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
        Schema::dropIfExists('gynae_pre_op_check_lists');
    }
};
