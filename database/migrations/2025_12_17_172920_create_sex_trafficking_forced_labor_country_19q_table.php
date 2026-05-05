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
        Schema::create('sex_trafficking_forced_labor_country_19q', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('type_vot')->nullable();
            $table->text('type_vot_other')->nullable();
            $table->string('men_19')->nullable();
            $table->string('women_19')->nullable();
            $table->string('third_gender_19')->nullable();
            $table->string('total_19')->nullable();
            $table->text('protection_measures_taken')->nullable();
            $table->text('preventive_measures_taken')->nullable();
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
        Schema::dropIfExists('sex_trafficking_forced_labor_country_19q');
    }
};
