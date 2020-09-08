<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('personal_id');
            $table->foreign('personal_id')->references('id')->on('personal_informations');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('institution_transferedto')->nullable();
            $table->string('post')->nullable();
            $table->string('authority')->nullable();
            $table->string('level')->nullable();
            $table->mediumText('remarks')->nullable();
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
        Schema::dropIfExists('transfers');
    }
}
