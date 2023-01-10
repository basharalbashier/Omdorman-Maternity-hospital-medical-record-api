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
        Schema::create('ant_addms', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->text('complaint');
            $table->text('history_presenting_illness');
            $table->string('pulse');
            $table->string('bp');
            $table->string('temp');
            $table->text('general_condition');
            $table->text('general_condition_list');
            $table->string('cvs_chest_examination');
            $table->string('fundel_height');
            $table->string('lie');
            $table->string('presentation');
            $table->string('fhr');
            $table->string('fm');
            $table->text('vaginal_exam')->nullable();
            $table->text('diagnosis')->nullable();
            $table->text('immediat_instrunction')->nullable();
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
        Schema::dropIfExists('ant_addms');
    }
};
