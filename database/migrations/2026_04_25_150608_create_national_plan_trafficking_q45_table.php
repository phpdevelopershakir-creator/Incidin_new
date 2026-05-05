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
        Schema::create('national_plan_trafficking_q45', function (Blueprint $table) {
            $table->id();
            $table->integer('case_id')->nullable();
            $table->text('national_plan_trafficking_q45_title_q45')->nullable();
            $table->longText('national_plan_trafficking_q45_description_q45')->nullable();
            $table->string('document_upload_q45')->nullable();
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
        Schema::dropIfExists('national_plan_trafficking_q45');
    }
};
