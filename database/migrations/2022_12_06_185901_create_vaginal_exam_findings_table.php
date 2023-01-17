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
        Schema::create('vaginal_exam_findings', function (Blueprint $table) {
            $table->id();
            $table->string('dil')->nullable();
            $table->string('position_cx')->nullable();
            $table->string('eff')->nullable();
            $table->text('cons')->nullable();
            $table->string('position')->nullable();
            $table->string('station')->nullable();

            $table->string('cap')->nullable();
            $table->string('moul')->nullable();
            $table->string('intact_rup')->nullable();
      
            $table->text('time')->nullable();
            $table->text('amount')->nullable();
            $table->text('mec')->nullable();
            $table->text('hb')->nullable();

            $table->text('blood')->nullable();
            $table->text('urine')->nullable();
            $table->text('uss')->nullable();
            $table->text('ctg')->nullable();
            $table->text('comm')->nullable();
            $table->string('dr_id');
            $table->string('file_id');
            $table->string('patient_id');
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
        Schema::dropIfExists('vaginal_exam_findings');
    }
};
