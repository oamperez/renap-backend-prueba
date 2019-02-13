<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birthdate');
            $table->string('department');
            $table->string('municipality');
            $table->string('address');
            $table->string('phone');
            $table->string('photo')->default('/img/profile/default.png');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('dpi')->unique();
            $table->enum('type',['admin','none'])->default('none');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
