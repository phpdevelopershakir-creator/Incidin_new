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
        Schema::create('government_provide_trafficking_q55', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('government_provide_name_q55')->nullable();
            $table->text('government_provide_description_q55')->nullable();
            $table->string('government_provide_men_q55')->nullable();
            $table->string('government_provide_women_q55')->nullable();
            $table->string('government_provide_tg_q55')->nullable();
            $table->string('government_provide_total_q55')->nullable();
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
        Schema::dropIfExists('government_provide_trafficking_q55');
    }
};
