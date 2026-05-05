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
        Schema::create('government_prosecute_deport_q52', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('prosecute_title_q52')->nullable();
            $table->string('prosecute_status_q52')->nullable();
            $table->string('document_upload_q52')->nullable();
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
        Schema::dropIfExists('government_prosecute_deport_q52');
    }
};
