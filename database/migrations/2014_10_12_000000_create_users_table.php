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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birthday');
            $table->enum('covid', ['none', 'first', 'second', 'third' ]);
            $table->enum('dinner', ['meat', 'fish', 'vegetarian', 'vegan' ]);
            $table->string('comment_dinner');
            $table->boolean('booking');
            $table->boolean('dancing');
            $table->boolean('sightseeing');
            $table->string('comment_general');
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
