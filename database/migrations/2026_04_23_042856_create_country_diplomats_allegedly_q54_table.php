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
        Schema::create('country_diplomats_allegedly_q54', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('country_diplomat_name_q54')->nullable();
            $table->text('country_diplomat_description_q54')->nullable();
            $table->string('country_diplomat_men_q54')->nullable();
            $table->string('country_diplomat_women_q54')->nullable();
            $table->string('country_diplomat_tg_q54')->nullable();
            $table->string('country_diplomat_total_q54')->nullable();
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
        Schema::dropIfExists('country_diplomats_allegedly_q54');
    }
};
