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
        Schema::create('conduct_awareness_activities_q59', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('number_traning_59')->nullable();
            $table->text('men_q59')->nullable();
            $table->text('women_q59')->nullable();
            $table->text('third_gender_q59')->nullable();
            $table->text('boy_q59')->nullable();
            $table->text('girl_q59')->nullable();
            $table->text('total_q59')->nullable();
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
        Schema::dropIfExists('conduct_awareness_activities_q59');
    }
};
