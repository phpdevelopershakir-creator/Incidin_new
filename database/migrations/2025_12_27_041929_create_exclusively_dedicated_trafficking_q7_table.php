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
        Schema::create('exclusively_dedicated_trafficking_q7', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('court_title_q7')->nullable();
            $table->text('court_type_q7')->nullable();
            $table->text('court_description_q7')->nullable();
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
        Schema::dropIfExists('exclusively_dedicated_trafficking_q7');
    }
};
