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
			$table->longText('preparacion');
			$table->integer('raciones');
			$table->string('imagen')->nullable();

			$table->boolean("huevo")->nullable();
			$table->boolean("pescado")->nullable();
			$table->boolean("leche")->nullable();
			$table->boolean("mani")->nullable();
			$table->boolean("mariscos")->nullable();
			$table->boolean("soya")->nullable();
			$table->boolean("nueces")->nullable();
			$table->boolean("trigo")->nullable();
			$table->boolean("gluten")->nullable();
			$table->boolean("lactosa")->nullable();
			$table->boolean("levadura")->nullable();
			
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
