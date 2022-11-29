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
        Schema::create('neonatal_discharg_notes', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name')->nullable();
            $table->string('dob')->nullable();
            $table->text('discharg_of_diag')->nullable();
            $table->string('birth_weight')->nullable();

            $table->string('dis_weight')->nullable();
            $table->text('condition_discharg')->nullable();
            $table->text('feeding')->nullable();
            $table->text('medication')->nullable();
            $table->text('immunaiz')->nullable();
            $table->string('bcg')->nullable();
            $table->text('hep')->nullable();
            $table->text('polio')->nullable();
            $table->text('vit')->nullable();
            $table->text('fu_date')->nullable();
            $table->text('referals')->nullable();
            $table->string('dm')->nullable();

            $table->string('others')->nullable();
            $table->text('others_text')->nullable();
            $table->text('previous_operation')->nullable();


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
        Schema::dropIfExists('neonatal_discharg_notes');
    }
};
