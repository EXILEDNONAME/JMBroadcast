<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBroadcastContentsTable extends Migration {
  public function up() {
    Schema::create('broadcast_contents', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title');
      $table->text('content');
      $table->integer('status')->default('1');
      $table->enum('active',['1', '2'])->default('1');
      $table->integer('sort')->default(NULL)->nullable();
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('broadcast_contents');
  }
}
