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
        Schema::create('supreme_court_precedent_4a', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->string('supreme_court_title_q4')->nullable();
            $table->string('supreme_court_status_q4')->nullable();
            $table->string('supreme_court_image_q4')->nullable();
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
        Schema::dropIfExists('supreme_court_precedent_4a');
    }
};
