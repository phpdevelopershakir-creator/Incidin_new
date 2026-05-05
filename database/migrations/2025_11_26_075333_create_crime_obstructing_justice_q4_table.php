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
        Schema::create('crime_obstructing_justice_q4', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('justice_title')->nullable();
            $table->string('justice_men')->nullable();
            $table->string('justice_women')->nullable();
            $table->string('justice_total')->nullable();
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
        Schema::dropIfExists('crime_obstructing_justice_q4');
    }
};
