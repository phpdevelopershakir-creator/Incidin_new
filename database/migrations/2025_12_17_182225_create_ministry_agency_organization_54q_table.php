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
        Schema::create('ministry_agency_organization_54q', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('category_trainee')->nullable();
            $table->text('number_training')->nullable();
            $table->text('training_contents')->nullable();
            $table->string('men_54')->nullable();
            $table->string('women_54')->nullable();
            $table->string('third_gender_54')->nullable();
            $table->string('total_54')->nullable();
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
        Schema::dropIfExists('ministry_agency_organization_54q');
    }
};
