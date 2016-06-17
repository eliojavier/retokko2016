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
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('last_name');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('doc_id');
			$table->dateTime('birthday');
			$table->string('phone');
			$table->string('size');
			$table->string('address');
			$table->string('twitter')->nullable();
			$table->string('instagram')->nullable();
			$table->string('recipe_type');
			$table->string('category');
			$table->string('academy');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
