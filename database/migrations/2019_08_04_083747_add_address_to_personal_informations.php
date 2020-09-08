<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAddressToPersonalInformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personal_informations', function (Blueprint $table) {
            $table->string('temporary_full_address')->nullable();
            $table->string('permanent_full_address')->nullable();
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
            $table->dropColumn('temporary_full_address');
            $table->dropColumn('permanent_full_address');
        });
    }
}
