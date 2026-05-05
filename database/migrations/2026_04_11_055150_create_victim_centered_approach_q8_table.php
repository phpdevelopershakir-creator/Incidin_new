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
        Schema::create('victim_centered_approach_q8', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('official_title_q8')->nullable();
            $table->text('official_investigation_q8')->nullable();
            $table->text('official_prosecution_q8')->nullable();
            $table->text('official_conviction_q8')->nullable();
            $table->text('official_administrative_q8')->nullable();
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
        Schema::dropIfExists('victim_centered_approach_q8');
    }
};
