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
        Schema::create('maturational_assessments', function (Blueprint $table) {
            $table->id();
            $table->text('age_when_exam')->nullable();
            $table->text('lenght')->nullable();
            $table->text('head_circ')->nullable();
            $table->text('posture')->nullable();
            $table->text('square')->nullable();
            $table->text('arm')->nullable();
            $table->text('popliteal')->nullable();
            $table->text('scarf')->nullable();
            $table->text('heel')->nullable();
            $table->text('skin')->nullable();
            $table->text('lanugo')->nullable();
            $table->text('plantar')->nullable();
            $table->text('breast')->nullable();
            $table->text('eye_ear')->nullable();
            $table->text('genital_male')->nullable();
            $table->text('genital_femal')->nullable();
            $table->text('neu')->nullable();
            $table->text('physical')->nullable();

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
        Schema::dropIfExists('maturational_assessments');
    }
};
