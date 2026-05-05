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
        Schema::create('speak_law_enforcement_23q', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('title_description')->nullable();
            $table->text('document_upload_q23')->nullable();
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
        Schema::dropIfExists('speak_law_enforcement_23q');
    }
};
