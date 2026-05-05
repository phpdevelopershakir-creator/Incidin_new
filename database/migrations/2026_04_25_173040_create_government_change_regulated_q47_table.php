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
        Schema::create('government_change_regulated_q47', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('government_change_regulated_title_q47')->nullable();
            $table->text('government_change_regulated_status_q47')->nullable();
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
        Schema::dropIfExists('government_change_regulated_q47');
    }
};
