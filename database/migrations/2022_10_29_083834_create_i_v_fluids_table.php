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
        Schema::create('i_v_fluids', function (Blueprint $table) {
            $table->id();
            $table->string('volu');
            $table->string('ml_rate');
            $table->string('additives');
            $table->string('dis_on');
            $table->string('dis_by');
            $table->string('start');
            $table->string('dc');
            $table->string('nurse_id');

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
        Schema::dropIfExists('i_v_fluids');
    }
};
