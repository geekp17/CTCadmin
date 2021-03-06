<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('lugger_id');
            $table->string('venue')->nullable();
            $table->date('date')->nullable();
            $table->string('meet');
            $table->string('other')->nullable();
            $table->string('studyTaken')->nullable();
            $table->string('comments')->nullable();
            $table->string('sharing')->nullable();
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
        Schema::dropIfExists('logs');
    }
}
