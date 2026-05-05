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
        Schema::create('forced_labor_supply_chains_11q', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('forced_labor_supply_chains_title')->nullable();
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
        Schema::dropIfExists('forced_labor_supply_chains_11q');
    }
};
