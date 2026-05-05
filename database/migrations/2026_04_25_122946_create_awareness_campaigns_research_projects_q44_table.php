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
        Schema::create('awareness_campaigns_research_projects_q44', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('awareness_campaigns_research_projects_title_q44')->nullable();
            $table->text('awareness_campaigns_research_projects_status_q44')->nullable();
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
        Schema::dropIfExists('awareness_campaigns_research_projects_q44');
    }
};
