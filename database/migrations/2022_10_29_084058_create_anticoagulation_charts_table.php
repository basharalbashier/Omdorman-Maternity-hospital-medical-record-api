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
        Schema::create('anticoagulation_charts', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->string('tick_for_inr');
            $table->string('inr');
            $table->string('aptt');
            $table->string('apt');
            $table->text('dosage_of_warfrin');

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
        Schema::dropIfExists('anticoagulation_charts');
    }
};
