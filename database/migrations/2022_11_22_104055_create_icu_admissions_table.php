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
        Schema::create('icu_admissions', function (Blueprint $table) {
            $table->id();
            $table->string('gest');
            $table->string('has_reqular_care');
            $table->string('mode_of_deliv')->nullable();
            $table->string('ind_icu_adm')->nullable();
            $table->text('init_diag')->nullable();
            $table->string('icu_dia')->nullable();
            $table->text('prob_one')->nullable();
            $table->text('prob_two')->nullable();
            $table->text('prob_three')->nullable();
            $table->text('prob_four')->nullable();
            $table->text('detailed_history')->nullable();
            $table->text('pmh')->nullable();
            $table->string('dr_id');
            $table->string('patient_id');
            $table->string('file_id');
            $table->string('icu_file_id');

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
        Schema::dropIfExists('icu_admissions');
    }
};
