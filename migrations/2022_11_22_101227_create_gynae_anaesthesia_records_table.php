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
        Schema::create('gynae_anaesthesia_records', function (Blueprint $table) {
            $table->id();
            $table->string('anaest')->nullable();
            $table->string('date_of_cons')->nullable();
            $table->string('operation')->nullable();
            $table->string('asa_class')->nullable();
            $table->text('previou_ana')->nullable();
            $table->text('aller')->nullable();
            $table->text('family_history')->nullable();
            $table->string('planned_emergency')->nullable();
            $table->string('asa_physical')->nullable();
            $table->string('previous_anae')->nullable();
            $table->string('time_since')->nullable();
            $table->string('problem_with_prev')->nullable();
            $table->string('problem_comment')->nullable();
            $table->string('teeth')->nullable();
            $table->string('air_way')->nullable();
            $table->string('weight')->nullable();
            $table->string('hb')->nullable();
            $table->string('bp')->nullable();
            $table->string('p')->nullable();
            $table->string('chest_pain')->nullable();
            $table->string('breath')->nullable();
            $table->string('cyan')->nullable();
            $table->string('sput')->nullable();
            $table->string('bro')->nullable();
            $table->string('alcohol')->nullable();
            $table->string('smoking')->nullable();
            $table->string('allens')->nullable();
            $table->string('teeth_two')->nullable();
            $table->string('caps')->nullable();
            $table->string('intubation')->nullable();
            $table->string('reflux')->nullable();
            $table->string('stomach')->nullable();
            $table->text('chest')->nullable();
            $table->text('hear')->nullable();
            $table->text('other')->nullable();
            $table->text('bio')->nullable();
            $table->text('ecg')->nullable();
            $table->text('cxr')->nullable();
            $table->string('digox')->nullable();
            $table->string('b_blocker')->nullable();
            $table->string('hypotenaives')->nullable();
            $table->string('antiarthy')->nullable();
            $table->string('steroids')->nullable();
            $table->string('maoi')->nullable();
            $table->string('tricycle')->nullable();
            $table->string('l_dope')->nullable();
            $table->string('anticoagulants')->nullable();
            $table->string('hypog')->nullable();
            $table->text('others')->nullable();

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
        Schema::dropIfExists('gynae_anaesthesia_records');
    }
};
