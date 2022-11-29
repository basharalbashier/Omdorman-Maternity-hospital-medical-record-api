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
        Schema::create('neonatal_opservationsheets', function (Blueprint $table) {
            $table->id();
            $table->string('temp')->nullable();
            $table->string('r_r')->nullable();
            $table->string('hr')->nullable();
            $table->string('wt')->nullable();

            $table->string('oxygen')->nullable();
            $table->string('activity')->nullable();
            $table->string('urine')->nullable();
            $table->string('stool')->nullable();
            $table->string('remarks')->nullable();

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
        Schema::dropIfExists('neonatal_opservationsheets');
    }
};
