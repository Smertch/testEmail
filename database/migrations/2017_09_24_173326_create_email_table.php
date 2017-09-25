<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userName', 200)->nullable();
            $table->string('emails', 120)->unique();
            $table->string('homepage', 2000)->nullable();
            $table->string('msg', 4000)->nullable();
            $table->string('ip', 200)->nullable();
            $table->string('browser', 200)->nullable();
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_emails');
    }
}
