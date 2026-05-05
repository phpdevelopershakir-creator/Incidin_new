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
        Schema::create('supreme_court_precedent_1a', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->string('supreme_court_title')->nullable();
            $table->string('supreme_court_status')->nullable();
            $table->string('supreme_court_image')->nullable();
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
        Schema::dropIfExists('supreme_court_precedent_1a');
    }
};
