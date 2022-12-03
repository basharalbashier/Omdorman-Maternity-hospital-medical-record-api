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
        Schema::create('discharge_drugs', function (Blueprint $table) {
            $table->id();
            $table->string('drug');
            $table->string('dose');
            $table->text('route');
            $table->text('frequency');
            $table->text('no_of_dose');
            $table->text('remarks');

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
        Schema::dropIfExists('discharge_drugs');
    }
};
