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
        Schema::create('vots_received_assistance_53q', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('number_case_title')->nullable();
            $table->text('number_case_other')->nullable();
            $table->string('men_53')->nullable();
            $table->string('women_53')->nullable();
            $table->string('third_gender_53')->nullable();
            $table->string('boy_53')->nullable();
            $table->string('girl_53')->nullable();
            $table->string('total_53')->nullable();
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
        Schema::dropIfExists('vots_received_assistance_53q');
    }
};
