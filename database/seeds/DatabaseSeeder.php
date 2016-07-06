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
        /*inserts de estados*/
        DB::table('lugars')->insert(['nombre' => 'amazonas']);
        DB::table('lugars')->insert(['nombre' => 'anzoategui']);
        DB::table('lugars')->insert(['nombre' => 'apure']);
        DB::table('lugars')->insert(['nombre' => 'aragua']);
        DB::table('lugars')->insert(['nombre' => 'barinas']);
        DB::table('lugars')->insert(['nombre' => 'bolívar']);
        DB::table('lugars')->insert(['nombre' => 'carabobo']);
        DB::table('lugars')->insert(['nombre' => 'cojedes']);
        DB::table('lugars')->insert(['nombre' => 'delta amacuro']);
        DB::table('lugars')->insert(['nombre' => 'distrito capital']);
        DB::table('lugars')->insert(['nombre' => 'falcón']);
        DB::table('lugars')->insert(['nombre' => 'guárico']);
        DB::table('lugars')->insert(['nombre' => 'lara']);
        DB::table('lugars')->insert(['nombre' => 'miranda']);
        DB::table('lugars')->insert(['nombre' => 'monagas']);
        DB::table('lugars')->insert(['nombre' => 'mérida']);
        DB::table('lugars')->insert(['nombre' => 'nueva esparta']);
        DB::table('lugars')->insert(['nombre' => 'portuguesa']);
        DB::table('lugars')->insert(['nombre' => 'sucre']);
        DB::table('lugars')->insert(['nombre' => 'trujillo']);
        DB::table('lugars')->insert(['nombre' => 'táchira']);
        DB::table('lugars')->insert(['nombre' => 'vargas']);
        DB::table('lugars')->insert(['nombre' => 'yaracuy']);
        DB::table('lugars')->insert(['nombre' => 'zulia']);
        
  

        /*
                DB::table('alergenicos')->insert(['alimento' => 'huevo',]);
                DB::table('alergenicos')->insert(['alimento' => 'pescado',]);
                DB::table('alergenicos')->insert(['alimento' => 'leche',]);
                DB::table('alergenicos')->insert(['alimento' => 'mani',]);
                DB::table('alergenicos')->insert(['alimento' => 'mariscos',]);
                DB::table('alergenicos')->insert(['alimento' => 'soya',]);
                DB::table('alergenicos')->insert(['alimento' => 'nueces',]);
                DB::table('alergenicos')->insert(['alimento' => 'trigo',]);
                DB::table('intolerancias')->insert(['alimento' => 'gluten',]);
                DB::table('intolerancias')->insert(['alimento' => 'lactosa',]);
                DB::table('intolerancias')->insert(['alimento' => 'levadura',]);
        */
		/*inserts de ingredientes*/
/*
        DB::table('ingredientes')->insert(['ingrediente' => 'Aceite de soja',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Aceite de maíz',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Aceite de oliva',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Nata o crema de leche',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Yogur',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Leche',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Helado',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Queso',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Setas',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Hongos',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Coles',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Legumbres',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Alubias',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Garbanzos',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Lentejas',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Soja',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Pimientas',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Patata',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Raíces y tubérculos',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Lechugas',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Acelga',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Alcachofa',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Batata',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Berenjena',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Berro',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Brócoli',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Brecol',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Calabacín',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Calabaza',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Cardo',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Cebolla',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Cebolleta',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Coles de Bruselas',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Coliflor',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Endivia',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Tomate',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Zanahoria',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Escarola',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Espárrago',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Espinaca',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Guisante',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Habas',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Hinojo',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Judías',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Maíz',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Palmito',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Pepino',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Pimiento',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Puerro',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Remolacha',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Albaricoque',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Aguacate',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Cereza',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Mango',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Melocotones',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Nectarina',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Ciruela',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Fruta del bosque',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Frutos secos',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Membrillo',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Peras',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Manzanas',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Uvas',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Fruta seca',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Frambuesa',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Fresa',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Granada',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Higos',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Kiwi',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Limón',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Mandarina',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Melón',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Naranja',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Piña',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Plátano',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Pomelo',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Sandía',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Cereales',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Harinas',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Panes',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Arroz',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Pasta',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Atún',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Anchoa',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Bacalao',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Bonito',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Boquerón',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Caballa',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Chicharro',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Corvina',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Dorada',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Lenguado',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Lubina',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Merluza',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Mero',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Palometa',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Pejerrey',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Rape',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Rodaballo',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Salmón',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Sardina',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Trucha',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Camarón',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Cigala',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Gamba',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Langostino',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Percebe',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Almeja',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Calamar',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Mejillón',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Ostra',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Pulpo',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Sepia',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Vieira',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Cordero',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Ovejas',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Ternera',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Buey',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Caballo',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Cabra',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Cerdo',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Vaca',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Avestruz',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Paloma',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Perdiz',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Patos',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Pavos',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Ocas',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Gallinas',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Pollo',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'capones',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'huevos : Clara, yema.',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Bison',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Conejo',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Liebre',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Oso',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Ciervo',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Jabalí',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Patos',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Faisanes',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Ocas salvajes.',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Ancas de rana',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Caracoles',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Alcoholes fuertes',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Cervezas',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Sidras',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Licores',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Vino blanco',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Vino caliente',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Vino tinto',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Vino rosado',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Whisky',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Cafés',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Cola',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Agua',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Agua mineral',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Agua gaseosa',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Zumo',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Tés',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Horchata',]);
        DB::table('ingredientes')->insert(['ingrediente' => 'Cerveza sin alcohol',]);
*/
    }

}
