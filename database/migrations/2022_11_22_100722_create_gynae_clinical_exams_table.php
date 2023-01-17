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
        Schema::create('gynae_clinical_exams', function (Blueprint $table) {
            $table->id();
            $table->text('general_apperance')->nullable();
            $table->string('bp')->nullable();
            $table->string('pluse')->nullable();
            $table->string('temp')->nullable();
            $table->text('heart_chest')->nullable();
            $table->text('abdominal')->nullable();
            $table->string('vulva')->nullable();
            $table->string('vagina')->nullable();
            $table->string('cervix')->nullable();
            $table->string('uterus')->nullable();
            $table->string('adnexae')->nullable();
            $table->text('diag')->nullable();
            $table->string('cbc')->nullable();
            $table->string('blood')->nullable();
            $table->string('lft')->nullable();
            $table->string('coagulation')->nullable();
            $table->string('ca125')->nullable();

            $table->string('cea')->nullable();
            $table->string('afp')->nullable();
            $table->string('b_h')->nullable();
            $table->string('others')->nullable();
            $table->string('hvs')->nullable();
            $table->string('other')->nullable();
            $table->string('ecg')->nullable();
            $table->string('urine')->nullable();
            $table->string('ultra')->nullable();
            $table->string('ct')->nullable();


            $table->string('mri')->nullable();
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
        Schema::dropIfExists('gynae_clinical_exams');
    }
};
