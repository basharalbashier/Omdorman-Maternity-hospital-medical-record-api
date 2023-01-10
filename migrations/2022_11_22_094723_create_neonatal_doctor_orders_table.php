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
        Schema::create('neonatal_doctor_orders', function (Blueprint $table) {
            $table->id();
            $table->text('order')->nullable();
            $table->text('progress')->nullable();
            $table->string('dr_id');
            $table->string('mother_id');
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
        Schema::dropIfExists('neonatal_doctor_orders');
    }
};
