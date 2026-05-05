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
        Schema::create('tarfficking_victims_q21', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->string('name_q21')->nullable();
            $table->string('operator_q21')->nullable();
            $table->string('capacity_men_q21')->default(0);
            $table->string('capacity_women_q21')->default(0);
            $table->string('capacity_total_q21')->default(0);
            $table->string('is_specialized_q21')->default(0);
            $table->text('eligible_victims_q21')->nullable();
            $table->text('note_q21')->nullable();
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
        Schema::dropIfExists('tarfficking_victims_q21');
    }
};
