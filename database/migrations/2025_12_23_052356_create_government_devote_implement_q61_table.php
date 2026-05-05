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
        Schema::create('government_devote_implement_q61', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('original_approach_q61')->nullable();
            $table->text('description_change_q61')->nullable();
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
        Schema::dropIfExists('government_devote_implement_q61');
    }
};
