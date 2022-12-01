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
        Schema::create('neonatal_files', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('date_birth');
            $table->string('person_in_charg');
            $table->string('ident');
            $table->string('phone');
            $table->string('patient_id')->nullable();
            $table->string('file_id')->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('neonatal_files');
    }
};
