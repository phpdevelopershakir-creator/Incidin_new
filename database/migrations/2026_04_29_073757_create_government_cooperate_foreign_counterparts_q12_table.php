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
        Schema::create('government_cooperate_foreign_counterparts_q12', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->string('government_cooperate_foreign_counterparts_country_q12')->nullable();
            $table->string('government_cooperate_foreign_counterparts_sex_trafficking_q12')->nullable();
            $table->string('government_cooperate_foreign_counterparts_labour_trafficking_q12')->nullable();
            $table->string('government_cooperate_foreign_counterparts_other_trafficking_q12')->nullable();
            $table->string('government_cooperate_foreign_counterparts_total_trafficking_q12')->nullable();
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
        Schema::dropIfExists('government_cooperate_foreign_counterparts_q12');
    }
};
