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
            $table->id();
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->boolean('adult');
            $table->string('group')->nullable();
            $table->string('phone')->nullable();
            $table->date('birthday')->nullable();
            $table->enum('covid', ['none', 'first', 'second', 'third' ])->nullable();
            $table->enum('dinner', ['beef', 'chicken', 'fish', 'vegan' ])->nullable();
            $table->string('comment_dinner')->nullable();
            $table->boolean('booking')->nullable();
            $table->boolean('dancing')->nullable();
            $table->boolean('sightseeing')->nullable();
            $table->string('comment_general')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
}
