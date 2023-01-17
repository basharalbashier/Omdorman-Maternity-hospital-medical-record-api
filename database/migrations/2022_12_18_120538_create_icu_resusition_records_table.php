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
        Schema::create('icu_resusition_records', function (Blueprint $table) {
            $table->id();
            $table->string('time')->nullable();
            $table->string('bp')->nullable();
            $table->string('breath')->nullable();
            $table->string('medic')->nullable();
            $table->string('fluid')->nullable();

            $table->text('record')->nullable();
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
        Schema::dropIfExists('icu_resusition_records');
    }
};
