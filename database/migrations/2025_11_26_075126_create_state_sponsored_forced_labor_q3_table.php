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
        Schema::create('state_sponsored_forced_labor_q3', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('labor_title')->nullable();
            $table->string('labor_men')->nullable();
            $table->string('labor_women')->nullable();
            $table->string('labor_total')->nullable();
            $table->string('labor_response')->nullable();
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
        Schema::dropIfExists('state_sponsored_forced_labor_q3');
    }
};
