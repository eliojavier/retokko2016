<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecetasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recetas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('receta');
			$table->string('modalidad');
			$table->longText('ingredientes');
			$table->longText('preparacion');
			$table->integer('raciones');
			$table->string('imagen')->nullable();
			$table->string('alergenicos')->nullable();
			$table->string('intolerancias')->nullable();
			$table->unsignedInteger('user_id');
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
		Schema::drop('recetas');
	}

}
