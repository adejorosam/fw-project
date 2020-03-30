<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Roles;
use App\Permissions;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * |unique
     * $user
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('google_id')->nullable();  
            $table->string('image')->nullable();
            $table->boolean('suspend')->default(false);
            $table->integer('privilege_id')->unsigned()->nullable();
            $table->foreign('privilege_id')->references('id')->on('privileges')->onDelete('cascade');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
