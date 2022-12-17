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
        Schema::create('while_aneaths', function (Blueprint $table) {
            $table->id();
            $table->text('benth')->nullable();
            $table->text('iscolen')->nullable();
            $table->text('trobeen')->nullable();

            $table->text('baflyon')->nullable();
            $table->text('ox_nitroz')->nullable();
            $table->text('air_tube')->nullable();
            $table->text('hand_tube')->nullable();
            $table->text('ear_tube')->nullable();
            $table->text('halw')->nullable();
            $table->text('normal_breath')->nullable();
            $table->text('not_normal_breath')->nullable();
            $table->text('cpr')->nullable();
            $table->text('machinaical_breath')->nullable();
            $table->text('without_soda')->nullable();
            $table->text('bro_atro')->nullable();

            $table->text('other_info')->nullable();
            $table->text('hard_visils')->nullable();
            $table->text('hard_sleep')->nullable();

            $table->text('hard_to_satel')->nullable();
            $table->text('another')->nullable();
            $table->text('investigations')->nullable();
            $table->text('another_medicin')->nullable();


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
        Schema::dropIfExists('while_aneaths');
    }
};
