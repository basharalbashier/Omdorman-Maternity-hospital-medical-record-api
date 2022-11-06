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
        Schema::create('labour_ward_addmis', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->string('gravida');
            $table->string('par');
            $table->string('lmp');
            $table->string('edd');
            $table->string('ga');
            $table->string('co');
            $table->text('relevant_past_history');
            $table->text('general_history')->nullable();
            $table->string('pale');
            $table->string('bp');
            $table->string('pulse');
            $table->string('temp');
            $table->string('chest_and_cvs_exam');
            $table->string('fundal_height');
            $table->string('lie');
            $table->string('peresentation');
            $table->string('enagement');
            $table->string('amount_of_liquor')->nullable();
            $table->string('fhr');
            $table->string('fm');
            $table->string('time_of_contrations_start');
            $table->string('dr_id');
            $table->string('patient_id');
            $table->string('file_id');
            $table->string('nurse_id');
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
        Schema::dropIfExists('labour_ward_addmis');
    }
};
