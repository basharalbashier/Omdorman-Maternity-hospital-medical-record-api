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
        Schema::create('new_born_first_day_examinations', function (Blueprint $table) {
            $table->id();
            $table->text('baby_bcn')->nullable();
            $table->text('immature_mature')->nullable();
            $table->text('lengh')->nullable();
            $table->text('color')->nullable();
            $table->text('head')->nullable();
            $table->text('movem')->nullable();
            $table->text('fonta')->nullable();
            $table->text('eye')->nullable();
            $table->text('ear')->nullable();
            $table->text('lung')->nullable();
            $table->text('femoral')->nullable();
            $table->text('genit')->nullable();
            $table->text('anus')->nullable();
            $table->text('hip')->nullable();
            $table->text('hip_abd')->nullable();

            $table->text('day_of_life')->nullable();
            $table->text('state')->nullable();
            $table->text('posture')->nullable();
            $table->text('cry')->nullable();
            $table->text('tone')->nullable();
            $table->text('motor')->nullable();
            $table->text('turning')->nullable();
            $table->text('head_neu')->nullable();
            $table->text('ventral')->nullable();
            $table->text('upright')->nullable();
            $table->text('palmer')->nullable();
            $table->text('moro')->nullable();
            $table->text('hip_check')->nullable();
            $table->text('normal')->nullable();
            $table->text('review')->nullable();
           
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
        Schema::dropIfExists('new_born_first_day_examinations');
    }
};
