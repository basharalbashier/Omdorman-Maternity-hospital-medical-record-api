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
        Schema::create('delivery_and_postnatals', function (Blueprint $table) {
            $table->id();
            $table->text('mode')->nullable();
            $table->text('placenta')->nullable();
            $table->text('cct')->nullable();
            $table->text('mr')->nullable();
            $table->text('complete')->nullable();
            $table->text('incomplete')->nullable();
            $table->text('episi')->nullable();
            $table->text('decir')->nullable();
            $table->text('lactation')->nullable();
            $table->text('ant_d')->nullable();
            $table->text('blood_loss')->nullable();
            $table->text('comment')->nullable();
            $table->text('baby_sex')->nullable();
            $table->text('weight')->nullable();
            $table->text('apgar_score')->nullable();
            $table->text('refer_to_scbu')->nullable();
            $table->text('postnatal_follow_up')->nullable();
            $table->text('date')->nullable();
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
        Schema::dropIfExists('delivery_and_postnatals');
    }
};
