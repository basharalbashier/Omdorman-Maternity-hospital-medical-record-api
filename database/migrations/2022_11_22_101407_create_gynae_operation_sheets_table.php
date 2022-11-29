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
        Schema::create('gynae_operation_sheets', function (Blueprint $table) {
            $table->id();
            $table->text('opertion')->nullable();
            $table->text('findings')->nullable();
            $table->text('operative_notes')->nullable();
            $table->text('note')->nullable();
            $table->text('comment')->nullable();
            $table->string('specimen')->nullable();
            $table->string('packs')->nullable();
            $table->string('swab')->nullable();
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
        Schema::dropIfExists('gynae_operation_sheets');
    }
};
