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
        Schema::create('nurse_observation_notes', function (Blueprint $table) {
            $table->id();
            $table->string('temp')->nullable();
            $table->string('puls_rate')->nullable();
            $table->string('resp_rate')->nullable();
            $table->string('b_p')->nullable();
            $table->string('urine_output_n')->nullable();
            $table->string('urine_output_d')->nullable();
            $table->string('level_of_conaciouances')->nullable();
            $table->string('o_two')->nullable();
            $table->string('odema_general')->nullable();
            $table->string('odema_ll')->nullable();
            $table->string('urine_acetone')->nullable();
            $table->string('urine_sugar')->nullable();
            $table->string('urine_protein')->nullable();
            $table->string('skin_color')->nullable();
            $table->text('remarks')->nullable();

            $table->string('patient_id');
            $table->string('file_id');
            $table->string('nurse_id');
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
        Schema::dropIfExists('nurse_observation_notes');
    }
};
