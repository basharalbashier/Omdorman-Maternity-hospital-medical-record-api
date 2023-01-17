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
        Schema::create('reqular_drugs', function (Blueprint $table) {
            $table->id();
            $table->string('drug')->nullable();
            $table->string('dosage')->nullable();
            $table->string('route')->nullable();
            $table->string('frequency')->nullable();

            $table->string('patient_id');
            $table->string('file_id');
            $table->string('dr_id');
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
        Schema::dropIfExists('reqular_drugs');
    }
};
