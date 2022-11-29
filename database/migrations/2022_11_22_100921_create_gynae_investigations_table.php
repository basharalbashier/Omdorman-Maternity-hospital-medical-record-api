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
        Schema::create('gynae_investigations', function (Blueprint $table) {
            $table->id();

            $table->text('investigation')->nullable();
            $table->text('result')->nullable();

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
        Schema::dropIfExists('gynae_investigations');
    }
};
