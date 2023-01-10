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
        Schema::create('operation_notes', function (Blueprint $table) {
            $table->id();
            $table->text('caesarean')->nullable();
            $table->text('ventouse')->nullable();
            $table->text('repair')->nullable();
            $table->text('emergency')->nullable();
            $table->text('forceps')->nullable();
            $table->text('m_r_o')->nullable();
            $table->text('other')->nullable();
            $table->text('elective')->nullable();
            $table->text('indication')->nullable();
            $table->text('surgeon')->nullable();
            $table->text('assistant')->nullable();
            $table->text('anaesth')->nullable();
            $table->text('anashisia')->nullable();
            $table->text('incision')->nullable();
            $table->text('procedure')->nullable();

            $table->text('blood_loss')->nullable();
            $table->text('ovaries')->nullable();
            $table->text('baby')->nullable();
            $table->text('weight')->nullable();
            $table->text('apgar')->nullable();
            $table->text('refer_to_scbu')->nullable();
            $table->text('treatment')->nullable();
            $table->text('antibiotic')->nullable();
            $table->text('analgesia')->nullable();
            $table->text('anticoagulant')->nullable();
            $table->text('iv_fluids')->nullable();
            $table->text('blood_trans')->nullable();
            $table->text('recommendation')->nullable();
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
        Schema::dropIfExists('operation_notes');
    }
};
