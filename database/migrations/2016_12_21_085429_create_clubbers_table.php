<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubbers', function (Blueprint $table) {
          $table->increments('id');
          $table->string('firstName');
          $table->string('lastName');
          $table->string('mobileNo')->unique();
          $table->date('dob');
          $table->string('address');
          $table->integer('lugger_id')->nullable();
          $table->timestamps();
          $table->string('instagram')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clubbers');
    }
}
