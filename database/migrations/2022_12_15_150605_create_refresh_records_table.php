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
        Schema::create('refresh_records', function (Blueprint $table) {
            $table->id();
            $table->string('prus')->nullable();
            $table->string('puls')->nullable();
            $table->string('breath')->nullable();
            $table->string('medic')->nullable();
            $table->string('fluid')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('refresh_records');
    }
};
