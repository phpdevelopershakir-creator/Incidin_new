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
        Schema::create('tarfficking_victims_q22', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->string('name_q22')->nullable();
            $table->string('operator_q22')->nullable();
            $table->string('capacity_men_q22')->default(0);
            $table->string('capacity_women_q22')->default(0);
            $table->string('capacity_total_q22')->default(0);
            $table->string('is_specialized_q22')->default(0);
            $table->text('eligible_victims_q22')->nullable();
            $table->text('note_q22')->nullable();
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
        Schema::dropIfExists('tarfficking_victims_q22');
    }
};
