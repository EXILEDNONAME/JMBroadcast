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
            $table->string('title');
            $table->string('page_title');
            $table->string('header_left');
            $table->string('header_right');
            $table->string('content_left');
            $table->string('content_right');
            $table->text('footer');

            // $table->string('header_left_social');
            // $table->string('header_right_custom');
            // $table->string('headline');
            // $table->string('footer_right');
            $table->string('active')->default('1')->nullable();
            $table->string('status')->default('0')->nullable();
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
