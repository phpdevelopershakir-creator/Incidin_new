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
        Schema::create('labor_inspectorate_unit_courts_q6', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('court_title')->nullable();
            $table->text('court_description')->nullable();
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
        Schema::dropIfExists('labor_inspectorate_unit_courts_q6');
    }
};
