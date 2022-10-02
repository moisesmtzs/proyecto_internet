<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id', 11)->autoIncrement();
            $table->string('name', 60)->nullable();
            $table->string('last_name', 60)->nullable();
            $table->string('email', 30)->nullable();
            $table->string('phone', 10)->nullable();
            $table->tinyInteger('admin')->nullable();
            $table->tinyInteger('confirmed')->nullable();
            $table->string('token', 15)->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
