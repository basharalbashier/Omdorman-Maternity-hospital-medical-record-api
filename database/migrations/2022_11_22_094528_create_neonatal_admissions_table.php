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
        Schema::create('neonatal_admissions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('mr')->nullable();
            $table->string('source_of_adm')->nullable();
            $table->text('cause_of_adm')->nullable();
            $table->string('weight')->nullable();
            $table->string('lenght')->nullable();

            $table->string('ofc')->nullable();
            $table->string('gestation')->nullable();         
            $table->string('dates')->nullable();
            $table->string('us')->nullable();
            $table->text('assesment')->nullable();
            $table->text('general_exam')->nullable();
            $table->text('resp')->nullable();
            $table->text('cardiov')->nullable();

            $table->text('abdomen')->nullable();
            $table->text('cns')->nullable();
            $table->text('other')->nullable();
            $table->text('admis_dia')->nullable();
            $table->string('dr_id');
            $table->string('file_id');
            $table->string('mother_id');
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
        Schema::dropIfExists('neonatal_admissions');
    }
};
