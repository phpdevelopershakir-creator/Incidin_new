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
        Schema::create('trafficking_victims_services_20q', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('title_original_guideline')->nullable();
            $table->text('description_change')->nullable();
            $table->text('document_upload_q20')->nullable();
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
        Schema::dropIfExists('trafficking_victims_services_20q');
    }
};
