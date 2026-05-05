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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_type')->nullable();
            $table->string('mobile')->nullable();
            $table->string('designation_one')->nullable();
            $table->string('organization')->nullable();
            $table->string('designation_two')->nullable();
            $table->string('designation_three')->nullable();
            $table->string('work_area')->nullable();
            $table->string('status')->nullable();
            $table->string('division_department')->nullable();
            $table->string('focal_person_number_one')->nullable();
            $table->string('focal_person_number_two')->nullable();
            $table->string('focal_person_number_three')->nullable();
            $table->string('focal_person_email_three')->nullable();
            $table->string('agency')->nullable();
            $table->string('focal_person_email_two')->nullable();
            $table->string('division_id')->nullable();
            $table->string('district_id')->nullable();
            $table->string('upazilla_id')->nullable();
            $table->string('union_id')->nullable();
            $table->string('focal_person_name_one')->nullable();
            $table->string('focal_person_name_two')->nullable();
            $table->string('userid')->nullable();
            $table->string('focal_person_name_three')->nullable();
            $table->string('ministry_id')->nullable();
             $table->integer('two_factor_code')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
