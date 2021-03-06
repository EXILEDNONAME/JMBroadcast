<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessesTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('accesses', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('description')->nullable();
      $table->integer('status')->default('1');
      $table->enum('active',['1', '2'])->default('1');
      $table->integer('sort')->default(NULL)->nullable();
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
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
    Schema::dropIfExists('accesses');
  }
}
