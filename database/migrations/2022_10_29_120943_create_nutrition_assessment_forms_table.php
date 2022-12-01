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
        Schema::create('nutrition_assessment_forms', function (Blueprint $table) {
            $table->id();
            $table->text('adm')->nullable();;
            $table->string('ht')->nullable();;
            $table->string('wt')->nullable();;
            $table->string('ibw')->nullable();;
            $table->string('bmi')->nullable();
            $table->string('anore')->nullable();
            $table->string('swall')->nullable();
            $table->string('chew')->nullable();
            $table->string('dental')->nullable();
            $table->string('naus')->nullable();
            $table->string('vomt')->nullable();
            $table->string('consi')->nullable();
            $table->string('diarr')->nullable();
            $table->string('food')->nullable();
            $table->string('hear')->nullable();
            $table->string('limit')->nullable();
            $table->string('demen')->nullable();
            $table->string('language')->nullable();
            $table->string('na')->nullable();
            $table->string('post')->nullable();
            $table->string('fever')->nullable();
            $table->string('wond')->nullable();
            $table->string('adequa')->nullable();
            $table->string('obese')->nullable();
            $table->string('risk')->nullable();
            $table->string('malu')->nullable();
            $table->string('nutrition_risk')->nullable();
            $table->string('problem')->nullable();
            $table->string('related')->nullable();
            $table->string('as_evidence')->nullable();
            $table->string('breast')->nullable();
            $table->string('after')->nullable();
            $table->string('one_hour')->nullable();
            $table->text('counseling')->nullable();
            $table->text('comment')->nullable();
            
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
        Schema::dropIfExists('nutrition_assessment_forms');
    }
};
