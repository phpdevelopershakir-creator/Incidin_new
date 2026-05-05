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
        Schema::create('allegedly_complicit_official_q5', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('official_title')->nullable();
            $table->string('official_investigation')->nullable();
            $table->string('official_prosecution')->nullable();
            $table->string('official_conviction')->nullable();
            $table->string('official_administrative')->nullable();
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
        Schema::dropIfExists('allegedly_complicit_official_q5');
    }
};
