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
        Schema::create('gynae_clinical_discharge_summaries', function (Blueprint $table) {
            $table->id();
            $table->text('general_apperance')->nullable();
            $table->string('bp')->nullable();
            $table->string('pulse')->nullable();
            $table->string('temp')->nullable();
            $table->text('heart_chest')->nullable();
            $table->text('abdominal_findings')->nullable();
            $table->string('vulva')->nullable();
            $table->string('vagina')->nullable();
            $table->string('cervix')->nullable();
            $table->string('uterus')->nullable();
            $table->string('adnexae')->nullable();
            $table->text('diagnosis')->nullable();
            $table->text('admission_instructions')->nullable();
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
        Schema::dropIfExists('gynae_clinical_discharge_summaries');
    }
};
