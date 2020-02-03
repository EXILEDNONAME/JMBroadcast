<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration {
  public function up() {
    Schema::create('areas', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('description');
      $table->enum('active',['1', '2'])->default('1');
      $table->integer('sort')->default(NULL)->nullable();
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('areas');
  }
}
