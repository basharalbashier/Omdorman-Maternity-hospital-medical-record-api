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
        Schema::create('neonatal_units', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_mother')->nullable();
            $table->string('sex')->nullable();
            $table->string('baby_no')->nullable();
            $table->string('address')->nullable();
            $table->string('birthdate')->nullable();
            $table->string('birthtime')->nullable();
            $table->string('obs_unit')->nullable();
            $table->string('dis_date')->nullable();
            $table->text('summary')->nullable();
            $table->string('resuscitation')->nullable();
            $table->string('birth_weight')->nullable();
            $table->string('admitted_to_scn')->nullable();
            $table->string('follow_u')->nullable();
            $table->string('discharg_weight')->nullable();
            $table->text('feeding_on_dis')->nullable();
            $table->string('prev_operation')->nullable();
            $table->string('medical_prob')->nullable();
            $table->text('husband_occup')->nullable();
            $table->string('medical_status_at_deliv')->nullable();
            $table->string('age')->nullable();
            $table->string('bg')->nullable();
            $table->string('antibod')->nullable();
            $table->string('edd')->nullable();
            $table->string('certain')->nullable();
            $table->string('weeks_preg')->nullable();
            $table->string('obataric_history')->nullable();
            $table->string('gravida')->nullable();
            $table->string('para')->nullable();
            $table->text('illness_during')->nullable();
            $table->text('durgs_during')->nullable();
            $table->string('type_of_deliv')->nullable();
            $table->string('fetal_distress')->nullable();
            $table->string('delivery_by')->nullable();
            $table->string('cord_round')->nullable();
            $table->string('indication_cs')->nullable();

            $table->text('resp_first')->nullable();
            $table->string('regulat_or_cry')->nullable();
            $table->string('color')->nullable();
            $table->string('tone')->nullable();
            $table->string('vitamin_k_given')->nullable();
            $table->string('res_necess')->nullable();
            $table->string('heart')->nullable();
            $table->string('respiration')->nullable();
            $table->string('tone_2')->nullable();
            $table->string('responsiveness')->nullable();
            $table->string('color_2')->nullable();
            $table->string('exam_by')->nullable();
            $table->string('general')->nullable();
            $table->string('skull')->nullable();
            $table->string('skin')->nullable();
            $table->string('limbs')->nullable();
            $table->string('abdomen')->nullable();
            $table->string('genital')->nullable();
            $table->string('auns')->nullable();
            $table->string('spontan')->nullable();
            $table->string('muscle_tone')->nullable();
            $table->string('rooting')->nullable();
            $table->string('sucking')->nullable();
            $table->string('traction')->nullable();
            $table->string('grasp')->nullable();
            $table->string('automatic')->nullable();
            $table->string('moro')->nullable();
            $table->string('trans')->nullable();
            $table->string('recived')->nullable();
            $table->string('condition_on_arriv')->nullable();
            $table->string('temp')->nullable();
            $table->string('colour')->nullable();
            $table->string('respir')->nullable();
            $table->string('examined_at')->nullable();
            $table->string('hours_by')->nullable();
            $table->string('hips')->nullable();
            $table->string('gestational_assess')->nullable();
            $table->string('nutri')->nullable();
             $table->string('another_heart')->nullable();
            $table->string('head_circum')->nullable();
            $table->string('mother_feeding')->nullable();
            $table->text('comment')->nullable();
  

            $table->string('dr_id');
            $table->string('mother_id');
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
        Schema::dropIfExists('neonatal_units');
    }
};
