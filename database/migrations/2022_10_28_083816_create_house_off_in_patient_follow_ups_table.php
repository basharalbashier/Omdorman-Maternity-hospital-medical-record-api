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
        Schema::create('house_off_in_patient_follow_ups', function (Blueprint $table) {
            $table->id();
            $table->string('bp');
            $table->string('urine');
            $table->string('fhr');
            $table->string('odema');
            $table->text('remarks');
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
        Schema::dropIfExists('house_off_in_patient_follow_ups');
    }
};
