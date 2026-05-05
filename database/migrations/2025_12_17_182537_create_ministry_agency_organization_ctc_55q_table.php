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
        Schema::create('ministry_agency_organization_ctc_55q', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('types_activities')->nullable();
            $table->text('types_activities_other')->nullable();
            $table->text('number_organizations_covered')->nullable();
            $table->string('distric_id')->nullable();
            $table->text('number_events')->nullable();
            $table->string('men_55')->nullable();
            $table->string('women_55')->nullable();
            $table->string('third_gender_55')->nullable();
            $table->string('boy_55')->nullable();
            $table->string('girl_55')->nullable();
            $table->string('total_55')->nullable();
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
        Schema::dropIfExists('ministry_agency_organization_ctc_55q');
    }
};
