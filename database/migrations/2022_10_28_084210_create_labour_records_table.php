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
        Schema::create('labour_records', function (Blueprint $table) {
            $table->id();
            $table->string('cx_position');
            $table->string('effacement');
            $table->string('consistency');
            $table->string('dilatation');
            $table->string('station');
            $table->string('pre_position');
            $table->string('caput');
            $table->string('moulding');

            $table->string('intact');
            $table->string('ruputred');
            $table->string('if_reuputred_time');
            $table->string('spontancous');

            $table->string('arm');
            $table->string('amount');
            $table->string('meconium');

            $table->text('special_instructions');
            $table->string('dr_id');
            $table->string('patient_id');
            $table->string('file_id');
            $table->string('nurse_id');
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
        Schema::dropIfExists('labour_records');
    }
};
