<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBroadcastSetupsTable extends Migration {
  public function up() {
    Schema::create('broadcast_setups', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title')->nullable();
      $table->integer('time_slide_1')->default('15');
      $table->integer('time_slide_2')->default('15');
      $table->string('logo')->nullable();
      $table->string('header')->nullable();
      $table->string('header_r')->nullable();
      $table->string('header_l')->nullable();
      $table->string('content')->nullable();
      $table->string('content_r')->nullable();
      $table->string('content_l')->nullable();
      $table->string('footer')->nullable();
      $table->string('footer_r')->nullable();
      $table->string('footer_l')->nullable();
      $table->string('running_text')->nullable();
      $table->integer('status')->default('1');
      $table->enum('active',['1', '2'])->default('1');
      $table->integer('sort')->default(NULL)->nullable();
      $table->integer('created_by')->nullable();
      $table->integer('updated_by')->nullable();
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('broadcast_setups');
  }
}
