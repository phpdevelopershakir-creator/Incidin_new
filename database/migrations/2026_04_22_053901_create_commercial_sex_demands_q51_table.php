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
        Schema::create('commercial_sex_demands_q51', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('commercial_title_q51')->nullable();
            $table->string('commercial_status_q51')->nullable();
            $table->string('document_upload_q51')->nullable();
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
        Schema::dropIfExists('commercial_sex_demands_q51');
    }
};
