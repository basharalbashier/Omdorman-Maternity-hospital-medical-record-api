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
        Schema::create('after_aneaths', function (Blueprint $table) {
            $table->id();
            $table->text('respon')->nullable();
            $table->text('know')->nullable();
            $table->text('can_protect')->nullable();
            $table->text('back_normal')->nullable();
            $table->text('painless')->nullable();
            $table->text('vomit')->nullable();
            $table->text('time_of_accedent')->nullable();
            $table->text('blood_drop')->nullable();
            $table->text('breath_drop')->nullable();
            $table->text('coma')->nullable();
            $table->text('contin_paralisied')->nullable();
            $table->text('allerg')->nullable();
            $table->text('breath_vomit')->nullable();
            $table->text('heart_attack')->nullable();
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
        Schema::dropIfExists('after_aneaths');
    }
};
