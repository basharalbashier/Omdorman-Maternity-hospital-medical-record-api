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
        Schema::create('gynae_observation_sheets', function (Blueprint $table) {
            $table->id();
            $table->string('time')->nullable();
            $table->string('bp')->nullable();
            $table->string('d')->nullable();
            $table->string('pulse')->nullable();
            $table->string('temp')->nullable();
            $table->string('bowels')->nullable();
            $table->string('urine')->nullable();
            $table->string('spicmen')->nullable();
            $table->string('weight')->nullable();
            $table->text('observation')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('gynae_observation_sheets');
    }
};
