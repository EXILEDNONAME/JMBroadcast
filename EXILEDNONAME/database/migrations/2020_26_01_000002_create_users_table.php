<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
  public function up() {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_access')->unsigned();
      $table->string('username')->unique();
      $table->string('phone')->unique();
      $table->string('email')->unique();
      $table->string('name');
      $table->string('address_1')->nullable();
      $table->string('address_2')->nullable();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
      $table->rememberToken();
      $table->timestamps();
      $table->foreign('id_access')->references('id')->on('accesses')->onUpdate('cascade')->onDelete('cascade');
    });
  }

  public function down() {
    Schema::dropIfExists('users');
  }
}
