<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateDistrictsTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('districts', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->unsignedInteger('district_id');
           $table->string('district_name_np');
           $table->string('district_name');
           $table->string('mun_vdc');
           $table->string('mun_vdc_en');
           $table->string('type');
           $table->string('province');
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
       Schema::dropIfExists('districts');
   }
}