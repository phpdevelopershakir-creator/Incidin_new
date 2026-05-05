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
        Schema::create('government_devote_implement_q14', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('original_approach_q14')->nullable();
            $table->text('description_change_q14')->nullable();
            $table->string('document_upload_q14')->nullable();
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
        Schema::dropIfExists('government_devote_implement_q14');
    }
};
