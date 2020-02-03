<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsentsTable extends Migration {
  public function up() {
    Schema::create('absents', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('id_user')->unsigned();
      $table->integer('status')->default('1');
      $table->enum('active',['1', '2'])->default('1');
      $table->integer('sort')->default(NULL)->nullable();
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
      $table->timestamps();
      $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
    });
  }

  public function down() {
    Schema::dropIfExists('absents');
  }
}
