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
        Schema::create('clinical_discharge_summaries', function (Blueprint $table) {
            $table->id();
            $table->text('final_diagnos')->nullable();
            $table->text('summary')->nullable();
            $table->text('operation')->nullable();
            $table->text('treatment')->nullable();
            $table->text('follow_up_arragement')->nullable();
            $table->text('treating_physion')->nullable();
            $table->text('hospital')->nullable();
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
        Schema::dropIfExists('clinical_discharge_summaries');
    }
};
