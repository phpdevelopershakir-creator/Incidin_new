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
        Schema::create('foreign_governments_trafficking_q60', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('trafficking_country')->nullable();
            $table->text('trafficking_target_group')->nullable();
            $table->text('trafficking_total_coverage')->nullable();
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
        Schema::dropIfExists('foreign_governments_trafficking_q60');
    }
};
