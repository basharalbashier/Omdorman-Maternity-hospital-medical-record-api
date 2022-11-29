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
        Schema::create('obst_hisories', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->string('gr');
            $table->string('para');

            $table->string('one');
            $table->string('two');
            $table->string('three');
            $table->string('four');
            $table->string('five');
            $table->string('six');
            $table->string('seven');
            $table->string('eight');
            $table->string('nine');
            $table->string('ten');

            $table->string('lmp');
            $table->string('edd');
            $table->string('scan_edd');
            $table->string('weeks');
            $table->text('past_m_history');
            $table->text('past_s_history');
            $table->text('drug_history');
            $table->text('social_history');

            $table->string('hypertention');
            $table->string('diabetes');
            $table->string('multiple_pregnancy');
            $table->text('others');

  
            $table->text('chest_cvs_exam')->nullable();
            $table->text('diagnosis')->nullable();
            $table->text('comments_and_social_plans')->nullable();
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
        Schema::dropIfExists('obst_hisories');
    }
};
