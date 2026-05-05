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
        Schema::create('formal_written_procedures_15q', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('category_trainee')->nullable();
            $table->text('number_traning')->nullable();
            $table->text('development_partner')->nullable();
            $table->string('men_q15')->nullable();
            $table->string('women_q15')->nullable();
            $table->string('third_gender_q15')->nullable();
            $table->string('total_q15')->nullable();
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
        Schema::dropIfExists('formal_written_procedures_15q');
    }
};
