<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60)->nullable();
            $table->string('last_name', 60)->nullable();
            $table->string('email', 30)->nullable()->unique();
            $table->string('phone', 10)->nullable();
            $table->tinyInteger('admin')->nullable();
            $table->tinyInteger('confirmed')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('token', 15)->nullable();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
};
