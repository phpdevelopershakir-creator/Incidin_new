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
        Schema::create('state_sponsored_forced_labor_q6', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('labor_title_q6')->nullable();
            $table->string('labor_men_q6')->nullable();
            $table->string('labor_women_q6')->nullable();
            $table->string('labor_total_q6')->nullable();
            $table->string('labor_response_q6')->nullable();
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
        Schema::dropIfExists('state_sponsored_forced_labor_q6');
    }
};
