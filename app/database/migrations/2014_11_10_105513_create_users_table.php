<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $t)
		{
			$t->increments('id');
			$t->string('email')->unique();
			$t->string('name');
			$t->string('position')->nullable();
			$t->integer('rating')->nullable();
			$t->string('password');
			$t->string('remember_token', 100)->nullable();
			$t->timestamps();
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
