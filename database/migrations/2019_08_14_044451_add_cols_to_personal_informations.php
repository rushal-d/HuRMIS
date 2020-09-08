<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColsToPersonalInformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personal_informations', function (Blueprint $table) {
            $table->integer('council')->nullable();
            $table->string('council_number')->nullable();
            $table->string('pis_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personal_informations', function (Blueprint $table) {
            $table->dropColumn('council');
            $table->dropColumn('council_number');
            $table->dropColumn('pis_number');
        });
    }
}
