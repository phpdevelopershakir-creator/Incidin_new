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
        Schema::create('case_models', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('caseid')->nullable();
            $table->string('situation')->nullable();
            $table->string('prevention')->nullable();
            $table->string('protection')->nullable();
            $table->string('prosecution')->nullable();
            $table->string('partnership')->nullable();
            $table->string('m_e')->nullable();
            $table->string('recommendation')->nullable();
            $table->string('is_delete')->default(0);
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
        Schema::dropIfExists('case_models');
    }
};
