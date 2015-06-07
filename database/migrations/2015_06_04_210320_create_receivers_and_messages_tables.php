<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiversAndMessagesTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('receivers2', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('username')->default('');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->timestamps();
		});

        Schema::create('messages2', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title')->default('');
            $table->integer('receivers2_id')->unsigned()->default(0);
            $table->foreign('receivers2_id')->references('id')->on('receivers2')->onDelete('cascade');
            $table->text('description')->default('');
        });
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('messages2');
        Schema::drop('receivers2');
	}

}