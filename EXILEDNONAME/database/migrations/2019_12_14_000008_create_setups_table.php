<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('page_title')->nullable();
            $table->string('header_left')->nullable();
            $table->string('header_right')->nullable();
            $table->string('content_left')->nullable();
            $table->string('content_right')->nullable();
            $table->string('footer')->nullable();
            $table->string('footer_lines')->nullable();
            $table->string('timer_slider_image')->nullable();
            $table->string('header_social')->nullable();
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
        Schema::dropIfExists('setups');
    }
}
