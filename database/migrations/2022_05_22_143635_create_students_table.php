<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("academic_year");
            $table->string("index_number");
            $table->string("name");
            $table->string("father_name")->nullable();
            $table->string("father_phone_number")->nullable();
            $table->string("mother_name")->nullable();
            $table->string("mother_last_name")->nullable();
            $table->string("mother_phone_number")->nullable();
            $table->string("gender");
            $table->double("aggregate");
            $table->string("programme");
            $table->string("track");
            $table->string("status");
            $table->string("photo_url")->nullable();
            $table->uuid("uuid");
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
        Schema::dropIfExists('students');
    }
}
