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
        Schema::create('gynae_anaesthesia_lists', function (Blueprint $table) {
            $table->id();
            $table->string('weight')->nullable();
            $table->string('surgeon')->nullable();
            $table->string('bp')->nullable();
            $table->string('hb')->nullable();
            $table->string('a')->nullable();
            $table->string('b')->nullable();
            $table->string('rh')->nullable();
            $table->string('hr')->nullable();
            $table->string('her')->nullable();
            $table->string('ab')->nullable();
            $table->string('o')->nullable();
            $table->string('rh_')->nullable();
            $table->string('general')->nullable();
            $table->string('epidural')->nullable();
            $table->string('neu')->nullable();
            $table->string('spinal')->nullable();
            $table->string('local')->nullable();
            $table->string('mask')->nullable();
            $table->string('airway')->nullable();
            $table->string('mask_ett')->nullable();
            $table->string('airway_ett')->nullable();
            $table->string('oral')->nullable();
            $table->string('nasal')->nullable();
            $table->string('diagnos')->nullable();
            $table->string('cvs')->nullable();
            $table->string('rs')->nullable();
            $table->string('cns')->nullable();
            $table->text('allerg')->nullable();
            $table->string('drugs')->nullable();
            $table->string('other_comment')->nullable();
            $table->text('premedication')->nullable();
            $table->string('operation')->nullable();
            $table->string('start_aneth')->nullable();
            $table->text('start_opertion')->nullable();
            $table->string('start_iv')->nullable();
            $table->string('semi_open')->nullable();
            $table->string('semi_closed')->nullable();
            $table->string('sm')->nullable();
            $table->string('smi')->nullable();
            $table->string('sr')->nullable();
            $table->string('cv')->nullable();
            $table->string('atropine')->nullable();
            $table->string('neostigment')->nullable();
            $table->string('blood_loss')->nullable();
            $table->string('replacement')->nullable();
            $table->string('balance')->nullable();
            $table->string('next_one')->nullable();
            $table->text('next_two')->nullable();
            $table->text('next_three')->nullable();
            $table->text('next_four')->nullable();
            $table->text('post_operation_condition')->nullable();
            $table->text('time_cvs')->nullable();
            $table->text('time_rs')->nullable();
            $table->string('walk')->nullable();
            $table->string('post_operation_inst')->nullable();
            $table->string('assistant')->nullable();
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
        Schema::dropIfExists('gynae_anaesthesia_lists');
    }
};
