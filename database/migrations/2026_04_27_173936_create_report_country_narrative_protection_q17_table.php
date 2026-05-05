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
        Schema::create('report_country_narrative_protection_q17', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('report_country_narrative_protection_title_q17')->nullable();
            $table->text('report_country_narrative_protection_description_q17')->nullable();
            $table->string('report_country_narrative_protection_men_q17')->nullable();
            $table->string('report_country_narrative_protection_women_q17')->nullable();
            $table->string('report_country_narrative_protection_tg_q17')->nullable();
            $table->string('report_country_narrative_protection_total_q17')->nullable();
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
        Schema::dropIfExists('report_country_narrative_protection_q17');
    }
};
