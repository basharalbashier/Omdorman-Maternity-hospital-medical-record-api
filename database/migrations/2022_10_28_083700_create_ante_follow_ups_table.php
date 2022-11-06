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
        Schema::create('ante_follow_ups', function (Blueprint $table) {
            $table->id();
            $table->string('bp');
            $table->string('ga');
            $table->string('fl');
            $table->string('pres');
            $table->string('eng');
            $table->string('fh');
            $table->string('hb');
            $table->string('urine');
            $table->string('comment')->nullable();
            $table->string('next_visit');
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
        Schema::dropIfExists('ante_follow_ups');
    }
};
