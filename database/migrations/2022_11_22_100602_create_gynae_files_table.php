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
        Schema::create('gynae_files', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->string('booking');
            $table->string('residance');
            $table->string('husband');
            $table->string('husband_tel');
            $table->string('husband_occup');
            $table->string('patient_id');
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
        Schema::dropIfExists('gynae_files');
    }
};
