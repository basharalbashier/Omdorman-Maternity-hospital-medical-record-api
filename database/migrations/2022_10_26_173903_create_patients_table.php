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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('unit');
            $table->string('booking');
            $table->string('name');
            $table->string('age');
            $table->string('tel');
            $table->string('occup');
            $table->string('residance');
            $table->string('husband');
            $table->string('husband_tel');
            $table->string('husband_occup');
            $table->string('blood');
            $table->text('allerg')->nullable();
            $table->string('insurance');
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
        Schema::dropIfExists('patients');
    }
};


