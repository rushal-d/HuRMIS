<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name_en')->nullable();
            $table->string('full_name_np')->nullable();
            $table->date('dob_en')->nullable();
            $table->date('dob_np')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('group')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('marital_status')->nullable();
            $table->integer('permanent_pradesh')->nullable();
            $table->integer('temporary_pradesh')->nullable();
            $table->integer('permanent_district')->nullable();
            $table->integer('temporary_district')->nullable();
            $table->integer('permanent_local_auth')->nullable();
            $table->integer('temporary_local_auth')->nullable();
            $table->integer('permanent_ward')->nullable();
            $table->integer('temporary_ward')->nullable();
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
        Schema::dropIfExists('personal_informations');
    }
}
