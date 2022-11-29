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
        Schema::create('gynae_post_operative_instructions', function (Blueprint $table) {
            $table->id();
            $table->text('post_instru')->nullable();
            $table->text('pack_or_drain')->nullable();
            $table->text('catheter')->nullable();
            $table->text('sedation')->nullable();
            $table->text('trans')->nullable();
            $table->text('sergron')->nullable();
            $table->text('recovery')->nullable();
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
        Schema::dropIfExists('gynae_post_operative_instructions');
    }
};
