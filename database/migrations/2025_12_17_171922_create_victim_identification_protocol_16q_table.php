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
        Schema::create('victim_identification_protocol_16q', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('main_document')->nullable();
            $table->text('description_change')->nullable();
            $table->text('document_image_q16')->nullable();
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
        Schema::dropIfExists('victim_identification_protocol_16q');
    }
};
