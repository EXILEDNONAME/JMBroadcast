<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBroadcastSlide1sTable extends Migration {
  public function up() {
    Schema::create('broadcast_slide1s', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->text('description')->nullable();
      $table->string('file');
      $table->integer('status')->default('1');
      $table->enum('active',['1', '2'])->default('1');
      $table->integer('sort')->default(NULL)->nullable();
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('broadcast_slide1s');
  }
}
