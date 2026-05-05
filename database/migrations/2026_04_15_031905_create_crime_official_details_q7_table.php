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
        Schema::create('crime_official_details_q7', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->string('justice_title_q7')->nullable();
            $table->integer('justice_men_q7')->default(0);
            $table->integer('justice_women_q7')->default(0);
            $table->integer('justice_total_q7')->default(0);
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
        Schema::dropIfExists('crime_official_details_q7');
    }
};
