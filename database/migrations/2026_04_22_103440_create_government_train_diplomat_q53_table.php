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
        Schema::create('government_train_diplomat_q53', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('government_title_q53')->nullable();
            $table->string('government_men_q53')->nullable();
            $table->string('government_women_q53')->nullable();
            $table->string('government_tg_q53')->nullable();
            $table->string('government_total_q53')->nullable();
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
        Schema::dropIfExists('government_train_diplomat_q53');
    }
};
