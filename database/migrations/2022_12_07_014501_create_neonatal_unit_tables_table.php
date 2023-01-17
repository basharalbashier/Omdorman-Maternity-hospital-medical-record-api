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
        Schema::create('neonatal_unit_tables', function (Blueprint $table) {
            $table->id();
            $table->string('duration')->nullable();
            $table->string('type')->nullable();
             $table->string('outcome')->nullable();
            $table->string('sex')->nullable();
            $table->string('still')->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('neonatal_unit_tables');
    }
};
