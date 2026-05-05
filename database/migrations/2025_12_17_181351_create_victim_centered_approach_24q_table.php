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
        Schema::create('victim_centered_approach_28q', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('overall_quality_car')->nullable();
            $table->text('why_q28')->nullable();
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
        Schema::dropIfExists('victim_centered_approach_24q');
    }
};
