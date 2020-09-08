<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('personal_id');
            $table->foreign('personal_id')->references('id')->on('personal_informations');
            $table->string('degree')->nullable();
            $table->string('year')->nullable();
            $table->string('grade')->nullable();
            $table->string('major_subject')->nullable();
            $table->string('institution')->nullable();
            $table->string('sponsor')->nullable();
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
        Schema::dropIfExists('qualifications');
    }
}
