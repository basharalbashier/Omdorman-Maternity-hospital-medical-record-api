<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_request_forms', function (Blueprint $table) {
            $table->id();
            $table->string('urine');
            $table->string('stoolG');
            $table->string('bffm');
            $table->string('esr');
            $table->string('stoolF');
            $table->string('viral');
            $table->string('bG');
            $table->string('cbc');
            $table->string('sick');
            $table->string('retic');
            $table->string('plate');
            $table->string('coag');
            $table->string('pt');
            $table->string('ptt');
            $table->string('fbg');
            $table->string('hbb');
            $table->string('rbg');
            $table->string('hbAIC');
            $table->string('crp');
            $table->string('ca');
            $table->string('lft');
            $table->string('rft');
            $table->string('thy');
            $table->string('fer');
            $table->string('ca125');
            $table->string('histo');
            $table->string('cyto');
            $table->string('urinC');
            $table->string('stoolCul');
            $table->string('bloodCul');
            $table->string('fluidCul');
            $table->string('wond');
            $table->string('hiVag');
            $table->text('comm')->nullable();
            $table->text('result')->nullable();
            $table->string('got_by_id')->nullable();
            $table->string('seen_at')->nullable();
            $table->string('status');
            $table->string('if_rejected_why')->nullable();
            $table->string('dr_id');
            $table->string('patient_id');
            $table->string('file_id');
            $table->string('money')->nullabe();
            $table->string('type');
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
        Schema::dropIfExists('lab_request_forms');
    }
};