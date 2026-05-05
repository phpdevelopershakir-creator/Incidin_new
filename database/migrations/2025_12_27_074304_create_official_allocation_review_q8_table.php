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
        Schema::create('official_allocation_review_q8', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('court_title_q8')->nullable();
            $table->text('court_type_q8')->nullable();
            $table->text('court_description_q8')->nullable();
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
        Schema::dropIfExists('official_allocation_review_q8');
    }
};
