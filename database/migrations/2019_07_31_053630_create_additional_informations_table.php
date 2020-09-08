<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionalInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('additional_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('personal_id');
            $table->foreign('personal_id')->references('id')->on('personal_informations');
            $table->date('appointment_date')->nullable();
            $table->string('provident_fund_no')->nullable();
            $table->string('sheet_no')->nullable();
            $table->string('cit_no')->nullable();
            $table->string('citizenship_no')->nullable();
            $table->string('insurance_no')->nullable();
            $table->mediumText('remarks')->nullable();
            $table->mediumText('notes')->nullable();
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
        Schema::dropIfExists('additional_informations');
    }
}
