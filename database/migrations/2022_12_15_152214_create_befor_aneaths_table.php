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
        Schema::create('befor_aneaths', function (Blueprint $table) {
            $table->id();
            $table->text('head')->nullable();
            $table->text('assistant')->nullable();
            $table->text('first_year')->nullable();
            $table->text('second_year')->nullable();
            $table->text('room')->nullable();
            $table->text('past_ill')->nullable();
            $table->text('curent_drugs')->nullable();
            $table->text('allerg')->nullable();
            $table->text('hemo')->nullable();
            $table->text('urin')->nullable();
            $table->text('bg')->nullable();
            $table->text('urin_bolina')->nullable();
            $table->text('blood_pruser')->nullable();
            $table->text('puls')->nullable();
            $table->text('another')->nullable();
            $table->text('first_aid_one')->nullable();
            $table->text('first_aid_two')->nullable();
            $table->text('first_aid_three')->nullable();


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
        Schema::dropIfExists('befor_aneaths');
    }
};
