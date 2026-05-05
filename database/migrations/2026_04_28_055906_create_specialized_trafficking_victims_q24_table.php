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
        Schema::create('specialized_trafficking_victims_q24', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->string('specialized_trafficking_victims_protection_q24')->nullable();
            $table->string('specialized_trafficking_victims_quality_q24')->nullable();
            $table->string('specialized_trafficking_victims_men_q24')->nullable();
            $table->string('specialized_trafficking_victims_women_q24')->nullable();
            $table->string('specialized_trafficking_victims_tg_q24')->nullable();
            $table->string('specialized_trafficking_victims_boy_q24')->nullable();
            $table->string('specialized_trafficking_victims_girl_q24')->nullable();
            $table->string('specialized_trafficking_victims_total_q24')->nullable();
            $table->json('specialized_trafficking_victims_location_q24')->nullable();
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
        Schema::dropIfExists('specialized_trafficking_victims_q24');
    }
};
