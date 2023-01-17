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
        Schema::create('u_s_requests', function (Blueprint $table) {
            $table->id();
            $table->text('remarks')->nullable();
            $table->string('unit');
            $table->string('us_one')->nullable();
            $table->string('us_two')->nullable();
            $table->string('us_three')->nullable();
            $table->string('us_four')->nullable();
            $table->string('us_five')->nullable();
            $table->string('us_six')->nullable();
            $table->string('got_by_id')->nullable();
            $table->string('seen_at')->nullable();
            $table->string('status');
            $table->string('dr_id');
            $table->string('patient_id');
            $table->string('file_id');
            $table->string('money')->nullabe();
            $table->string('type');
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
        Schema::dropIfExists('u_s_requests');
    }
};
