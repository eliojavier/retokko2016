<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('alergenicos')->insert([
			'alimento' => 'huevo',
		]);
		DB::table('alergenicos')->insert([
			'alimento' => 'pescado',
		]);
		DB::table('alergenicos')->insert([
			'alimento' => 'leche',
		]);
		DB::table('alergenicos')->insert([
			'alimento' => 'mani',
		]);
		DB::table('alergenicos')->insert([
			'alimento' => 'mariscos',
		]);
		DB::table('alergenicos')->insert([
			'alimento' => 'soya',
		]);
		DB::table('alergenicos')->insert([
			'alimento' => 'nueces',
		]);
		DB::table('alergenicos')->insert([
			'alimento' => 'trigo',
		]);

        DB::table('intolerancias')->insert([
            'alimento' => 'gluten',
        ]);
        DB::table('intolerancias')->insert([
            'alimento' => 'lactosa',
        ]);
        DB::table('intolerancias')->insert([
            'alimento' => 'levadura',
        ]);
	}

}
