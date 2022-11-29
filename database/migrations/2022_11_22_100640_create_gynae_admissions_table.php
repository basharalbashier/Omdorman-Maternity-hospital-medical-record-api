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
        Schema::create('gynae_admissions', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name')->nullable();
            $table->string('age')->nullable();
            $table->text('main_complaint')->nullable();
            $table->text('history_of_present')->nullable();
            $table->string('lmp')->nullable();
            $table->string('cycle')->nullable();
            $table->string('imb')->nullable();
            $table->string('pmb')->nullable();
            $table->string('pcb')->nullable();
            $table->string('dyspareunia')->nullable();
            $table->text('vaginale_dis')->nullable();
            $table->text('contrac')->nullable();
            $table->string('gravida')->nullable();
            $table->string('para')->nullable();
            $table->text('previous')->nullable();
            $table->string('dm')->nullable();
            $table->string('hypert')->nullable();
            $table->string('cardiac')->nullable();
            $table->string('thy')->nullable();
            $table->string('others')->nullable();
            $table->text('others_text')->nullable();
            $table->text('previous_operation')->nullable();
            $table->text('medication')->nullable();


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
        Schema::dropIfExists('gynae_admissions');
    }
};
