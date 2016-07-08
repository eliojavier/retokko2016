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
        
        /*inserts de alergenicos e intolerancias*/      
        DB::table('alergenicos')->insert(['nombre' => 'huevo',]);
        DB::table('alergenicos')->insert(['nombre' => 'pescado',]);
        DB::table('alergenicos')->insert(['nombre' => 'leche',]);
        DB::table('alergenicos')->insert(['nombre' => 'mani',]);
        DB::table('alergenicos')->insert(['nombre' => 'mariscos',]);
        DB::table('alergenicos')->insert(['nombre' => 'soya',]);
        DB::table('alergenicos')->insert(['nombre' => 'nueces',]);
        DB::table('alergenicos')->insert(['nombre' => 'trigo',]);
        DB::table('intolerancias')->insert(['nombre' => 'gluten',]);
        DB::table('intolerancias')->insert(['nombre' => 'lactosa',]);
        DB::table('intolerancias')->insert(['nombre' => 'levadura',]);

        /*Inserts de usuarios*/
        DB::table('users')->insert(['nombre'=>'Elio',
            'apellido'=>'Acosta',
            'email' => 'eliojavier86@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '17146579',
            'fecha_nacimiento' => '1986-01-29',
            'telefono' => '04261058185',
            'talla' => 'M',
            'direccion' => 'san martin',
            'twitter' => 'eliojavier',
            'instagram' => 'instagram',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' => 0,
            'lugar_id' => 1,
        ]);

        DB::table('users')->insert(['nombre'=>'Francisco',
            'apellido'=>'Gutierrez',
            'email' => 'franciscogutierrez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '6018815',
            'fecha_nacimiento' => '1963-09-29',
            'telefono' => '4246053910',
            'talla' => 'L',
            'direccion' => 'Maracaibo',
            'twitter' => '@franciscogutierrez28',
            'instagram' => '@francisco_22',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>24,
        ]);

        DB::table('users')->insert(['nombre'=>'José',
            'apellido'=>'Pérez',
            'email' => 'joseperez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '6359543',
            'fecha_nacimiento' => '1963-11-08',
            'telefono' => '4129074899',
            'talla' => 'S',
            'direccion' => 'Valencia',
            'twitter' => '@joseperez12',
            'instagram' => '@joseyus',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>7,
        ]);

        DB::table('users')->insert(['nombre'=>'Mateo',
            'apellido'=>'Romero',
            'email' => 'mateoromero@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '7505249',
            'fecha_nacimiento' => '1966-08-30',
            'telefono' => '4165897971',
            'talla' => 'S',
            'direccion' => 'Barquisimeto',
            'twitter' => '@mateoromero21',
            'instagram' => '@mateo_11',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>13,
        ]);

        DB::table('users')->insert(['nombre'=>'Alfredo',
            'apellido'=>'Suarez',
            'email' => 'alfredosuarez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '8455293',
            'fecha_nacimiento' => '1967-01-07',
            'telefono' => '4147010954',
            'talla' => 'L',
            'direccion' => 'Maracay',
            'twitter' => '@alfredosuarez27',
            'instagram' => '@alfredo_18',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Estudiante en curso',
            'academia' => 'La Academia del Café',
            'esAdministrador' =>0,
            'lugar_id' =>4,
        ]);

        DB::table('users')->insert(['nombre'=>'Pedro',
            'apellido'=>'Morales',
            'email' => 'pedromorales@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '9061845',
            'fecha_nacimiento' => '1968-04-29',
            'telefono' => '4167623500',
            'talla' => 'S',
            'direccion' => 'Ciudad Guayana',
            'twitter' => '@pedromorales12',
            'instagram' => '@pedro_17',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>6,
        ]);

        DB::table('users')->insert(['nombre'=>'Milena',
            'apellido'=>'Jimenez',
            'email' => 'milenajimenez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '10285571',
            'fecha_nacimiento' => '1975-12-09',
            'telefono' => '4268718723',
            'talla' => 'S',
            'direccion' => 'San Cristóbal',
            'twitter' => '@milenajimenez21',
            'instagram' => '@milena_25',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>21,
        ]);

        DB::table('users')->insert(['nombre'=>'María',
            'apellido'=>'Sanchez',
            'email' => 'mariasanchez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '10871077',
            'fecha_nacimiento' => '1978-05-02',
            'telefono' => '4247774473',
            'talla' => 'S',
            'direccion' => 'Maturín',
            'twitter' => '@mariasanchez12',
            'instagram' => '@maría_18',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>15,
        ]);

        DB::table('users')->insert(['nombre'=>'Claudia',
            'apellido'=>'Diaz',
            'email' => 'claudiadiaz@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '11197618',
            'fecha_nacimiento' => '1979-10-29',
            'telefono' => '4146499789',
            'talla' => 'SS',
            'direccion' => 'Barcelona',
            'twitter' => '@claudiadiaz20',
            'instagram' => '@claudia_21',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Estudiante en curso',
            'academia' => 'Academia ATF',
            'esAdministrador' =>0,
            'lugar_id' =>2,
        ]);

        DB::table('users')->insert(['nombre'=>'Graciela',
            'apellido'=>'Ramirez',
            'email' => 'gracielaramirez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '12593672',
            'fecha_nacimiento' => '1980-01-13',
            'telefono' => '4268425469',
            'talla' => 'XL',
            'direccion' => 'Ciudad Bolívar',
            'twitter' => '@gracielaramirez13',
            'instagram' => '@graciela_20',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>6,
        ]);

        DB::table('users')->insert(['nombre'=>'Luís',
            'apellido'=>'Garcia',
            'email' => 'luisgarcia@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '12844724',
            'fecha_nacimiento' => '1980-01-14',
            'telefono' => '4145997522',
            'talla' => 'M',
            'direccion' => 'Cumaná',
            'twitter' => '@luisgarcia23',
            'instagram' => '@luís_21',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Egresado',
            'academia' => 'Grupo Académico Panadero Pastelero',
            'esAdministrador' =>0,
            'lugar_id' =>19,
        ]);

        DB::table('users')->insert(['nombre'=>'Rosalba',
            'apellido'=>'Gil',
            'email' => 'rosalbagil@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '13378422',
            'fecha_nacimiento' => '1980-10-06',
            'telefono' => '4248115159',
            'talla' => 'M',
            'direccion' => 'Barinas',
            'twitter' => '@rosalbagil18',
            'instagram' => '@rosalba_26',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>5,
        ]);

        DB::table('users')->insert(['nombre'=>'Diana',
            'apellido'=>'Moreno',
            'email' => 'dianamoreno@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '13429703',
            'fecha_nacimiento' => '1983-12-28',
            'telefono' => '4167933151',
            'talla' => 'SS',
            'direccion' => 'Cabimas',
            'twitter' => '@dianamoreno16',
            'instagram' => '@diana_15',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>24,
        ]);

        DB::table('users')->insert(['nombre'=>'Ana',
            'apellido'=>'Gomez',
            'email' => 'anagomez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '13567849',
            'fecha_nacimiento' => '1983-12-30',
            'telefono' => '4246796307',
            'talla' => 'SS',
            'direccion' => 'Punto Fijo',
            'twitter' => '@anagomez11',
            'instagram' => '@ana_13',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Egresado',
            'academia' => 'Instituto Europeo del Pan',
            'esAdministrador' =>0,
            'lugar_id' =>11,
        ]);

        DB::table('users')->insert(['nombre'=>'Jaime',
            'apellido'=>'Ramos',
            'email' => 'jaimeramos@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '14346133',
            'fecha_nacimiento' => '1984-05-16',
            'telefono' => '4165951700',
            'talla' => 'SS',
            'direccion' => 'Puerto La Cruz',
            'twitter' => '@jaimeramos25',
            'instagram' => '@jaime_12',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Egresado',
            'academia' => 'Instituto Europeo del Pan',
            'esAdministrador' =>0,
            'lugar_id' =>2,
        ]);

        DB::table('users')->insert(['nombre'=>'Miguel',
            'apellido'=>'Molina',
            'email' => 'miguelmolina@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '14381581',
            'fecha_nacimiento' => '1985-01-17',
            'telefono' => '4126678017',
            'talla' => 'SS',
            'direccion' => 'Guarenas',
            'twitter' => '@miguelmolina29',
            'instagram' => '@miguel_14',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Estudiante en curso',
            'academia' => 'Instituto Europeo del Pan',
            'esAdministrador' =>0,
            'lugar_id' =>14,
        ]);

        DB::table('users')->insert(['nombre'=>'Rafael',
            'apellido'=>'Vazquez',
            'email' => 'rafaelvazquez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '14570674',
            'fecha_nacimiento' => '1985-01-31',
            'telefono' => '4248894939',
            'talla' => 'XL',
            'direccion' => 'Los Teques',
            'twitter' => '@rafaelvazquez18',
            'instagram' => '@rafael_21',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>14,
        ]);

        DB::table('users')->insert(['nombre'=>'Adriana',
            'apellido'=>'Ruiz',
            'email' => 'adrianaruiz@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '15636007',
            'fecha_nacimiento' => '1985-02-24',
            'telefono' => '4267306861',
            'talla' => 'S',
            'direccion' => 'Mérida',
            'twitter' => '@adrianaruiz23',
            'instagram' => '@adriana_28',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>16,
        ]);

        DB::table('users')->insert(['nombre'=>'Alberto',
            'apellido'=>'Lopez',
            'email' => 'albertolopez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '15659823',
            'fecha_nacimiento' => '1986-01-17',
            'telefono' => '4247602121',
            'talla' => 'XL',
            'direccion' => 'Ciudad Ojeda',
            'twitter' => '@albertolopez19',
            'instagram' => '@alberto_25',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>24,
        ]);

        DB::table('users')->insert(['nombre'=>'Adelaida',
            'apellido'=>'Delgado',
            'email' => 'adelaidadelgado@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '16153682',
            'fecha_nacimiento' => '1986-05-29',
            'telefono' => '4146281140',
            'talla' => 'XL',
            'direccion' => 'Guanare',
            'twitter' => '@adelaidadelgado27',
            'instagram' => '@adelaida_11',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Egresado',
            'academia' => 'Instituto Culinario de Caracas',
            'esAdministrador' =>0,
            'lugar_id' =>18,
        ]);

        DB::table('users')->insert(['nombre'=>'Christian',
            'apellido'=>'Hernandez',
            'email' => 'christianhernandez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '16159181',
            'fecha_nacimiento' => '1986-10-12',
            'telefono' => '4126361225',
            'talla' => 'XXL',
            'direccion' => 'Turmero',
            'twitter' => '@christianhernandez20',
            'instagram' => '@christian_23',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Estudiante en curso',
            'academia' => 'Instituto Culinario de Caracas',
            'esAdministrador' =>0,
            'lugar_id' =>4,
        ]);

        DB::table('users')->insert(['nombre'=>'Carlos',
            'apellido'=>'Gonzalez',
            'email' => 'carlosgonzalez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '16204790',
            'fecha_nacimiento' => '1987-01-05',
            'telefono' => '4147209078',
            'talla' => 'L',
            'direccion' => 'Coro',
            'twitter' => '@carlosgonzalez29',
            'instagram' => '@carlos_15',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Egresado',
            'academia' => 'Instituto Culinario de Caracas',
            'esAdministrador' =>0,
            'lugar_id' =>11,
        ]);

        DB::table('users')->insert(['nombre'=>'Margarita',
            'apellido'=>'Blanco',
            'email' => 'margaritablanco@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '16670322',
            'fecha_nacimiento' => '1987-07-12',
            'telefono' => '4127274367',
            'talla' => 'L',
            'direccion' => 'Guatire',
            'twitter' => '@margaritablanco19',
            'instagram' => '@margarita_13',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Estudiante en curso',
            'academia' => 'Galería Gastronómica. GAGA',
            'esAdministrador' =>0,
            'lugar_id' =>14,
        ]);

        DB::table('users')->insert(['nombre'=>'Fabio',
            'apellido'=>'Muñoz',
            'email' => 'fabiomuñoz@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '16746837',
            'fecha_nacimiento' => '1988-03-06',
            'telefono' => '4166894088',
            'talla' => 'S',
            'direccion' => 'Puerto Cabello',
            'twitter' => '@fabiomuñoz11',
            'instagram' => '@fabio_27',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Egresado',
            'academia' => 'La New Cuisine Centro de Capacitación Gastronómica',
            'esAdministrador' =>0,
            'lugar_id' =>7,
        ]);

        DB::table('users')->insert(['nombre'=>'Cecilia',
            'apellido'=>'Serrano',
            'email' => 'ceciliaserrano@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '16926750',
            'fecha_nacimiento' => '1988-07-31',
            'telefono' => '4268962322',
            'talla' => 'S',
            'direccion' => 'El Tigre',
            'twitter' => '@ceciliaserrano23',
            'instagram' => '@cecilia_21',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>2,
        ]);

        DB::table('users')->insert(['nombre'=>'Julio',
            'apellido'=>'Torres',
            'email' => 'juliotorres@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '17002243',
            'fecha_nacimiento' => '1988-08-16',
            'telefono' => '4166425529',
            'talla' => 'XL',
            'direccion' => 'Acarigua',
            'twitter' => '@juliotorres23',
            'instagram' => '@julio_16',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Egresado',
            'academia' => 'Academia Culinaria La Cocina del Chef',
            'esAdministrador' =>0,
            'lugar_id' =>18,
        ]);

        DB::table('users')->insert(['nombre'=>'Piedad',
            'apellido'=>'Ortega',
            'email' => 'piedadortega@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '17206139',
            'fecha_nacimiento' => '1988-10-23',
            'telefono' => '4146575207',
            'talla' => 'XXL',
            'direccion' => 'Carora',
            'twitter' => '@piedadortega18',
            'instagram' => '@piedad_15',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Estudiante en curso',
            'academia' => 'Escuela Gastronómica El Perejil',
            'esAdministrador' =>0,
            'lugar_id' =>13,
        ]);

        DB::table('users')->insert(['nombre'=>'Enrique',
            'apellido'=>'Martinez',
            'email' => 'enriquemartinez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '17406697',
            'fecha_nacimiento' => '1989-06-24',
            'telefono' => '4265925276',
            'talla' => 'XXL',
            'direccion' => 'Guacara',
            'twitter' => '@enriquemartinez20',
            'instagram' => '@enrique_26',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Egresado',
            'academia' => 'Escuela Gastronómica La Aceituna',
            'esAdministrador' =>0,
            'lugar_id' =>7,
        ]);

        DB::table('users')->insert(['nombre'=>'Luz',
            'apellido'=>'Perez',
            'email' => 'luzperez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '17635152',
            'fecha_nacimiento' => '1990-01-10',
            'telefono' => '4129731567',
            'talla' => 'M',
            'direccion' => 'Santa Teresa del Tuy',
            'twitter' => '@luzperez20',
            'instagram' => '@luz_23',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>14,
        ]);

        DB::table('users')->insert(['nombre'=>'Sandra',
            'apellido'=>'Martin',
            'email' => 'sandramartin@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '18339649',
            'fecha_nacimiento' => '1990-06-02',
            'telefono' => '4126566895',
            'talla' => 'M',
            'direccion' => 'San Fernando de Apure',
            'twitter' => '@sandramartin19',
            'instagram' => '@sandra_21',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Egresado',
            'academia' => 'Le Gourmet Cuisine',
            'esAdministrador' =>0,
            'lugar_id' =>3,
        ]);

        DB::table('users')->insert(['nombre'=>'Camilo',
            'apellido'=>'Navarro',
            'email' => 'camilonavarro@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '18363386',
            'fecha_nacimiento' => '1990-07-20',
            'telefono' => '4266113475',
            'talla' => 'SS',
            'direccion' => 'Carúpano',
            'twitter' => '@camilonavarro24',
            'instagram' => '@camilo_14',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Estudiante en curso',
            'academia' => 'Academia ATF',
            'esAdministrador' =>0,
            'lugar_id' =>19,
        ]);

        DB::table('users')->insert(['nombre'=>'Candelaria',
            'apellido'=>'Castro',
            'email' => 'candelariacastro@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '18498878',
            'fecha_nacimiento' => '1990-08-04',
            'telefono' => '4148865042',
            'talla' => 'XXL',
            'direccion' => 'La Victoria',
            'twitter' => '@candelariacastro18',
            'instagram' => '@candelaria_17',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>4,
        ]);

        DB::table('users')->insert(['nombre'=>'Frankin',
            'apellido'=>'Alonso',
            'email' => 'frankinalonso@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '18523081',
            'fecha_nacimiento' => '1990-09-26',
            'telefono' => '4168294465',
            'talla' => 'L',
            'direccion' => 'Cabudare',
            'twitter' => '@frankinalonso20',
            'instagram' => '@frankin_18',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>13,
        ]);

        DB::table('users')->insert(['nombre'=>'Antonio',
            'apellido'=>'Fernandez',
            'email' => 'antoniofernandez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '19449714',
            'fecha_nacimiento' => '1991-04-24',
            'telefono' => '4266809375',
            'talla' => 'M',
            'direccion' => 'San Antonio de los Altos',
            'twitter' => '@antoniofernandez20',
            'instagram' => '@antonio_20',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Egresado',
            'academia' => 'Instituto Culinario de Caracas',
            'esAdministrador' =>0,
            'lugar_id' =>14,
        ]);

        DB::table('users')->insert(['nombre'=>'Juan',
            'apellido'=>'Rodriguez',
            'email' => 'juanrodriguez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '19962525',
            'fecha_nacimiento' => '1991-09-04',
            'telefono' => '4125891481',
            'talla' => 'S',
            'direccion' => 'El Paraíso',
            'twitter' => '@juanrodriguez12',
            'instagram' => '@juan_22',
            'categoria' => 'Estudiante/Profesional',
            'tipoEstPro' => 'Estudiante en curso',
            'academia' => 'Academia ATF',
            'esAdministrador' =>0,
            'lugar_id' =>10,
        ]);

        DB::table('users')->insert(['nombre'=>'Eduardo',
            'apellido'=>'Dominguez',
            'email' => 'eduardodominguez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '20401064',
            'fecha_nacimiento' => '1991-09-05',
            'telefono' => '4248287873',
            'talla' => 'S',
            'direccion' => 'San Juan de los Morros',
            'twitter' => '@eduardodominguez25',
            'instagram' => '@eduardo_16',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>18,
        ]);

        DB::table('users')->insert(['nombre'=>'Martha',
            'apellido'=>'Alvarez',
            'email' => 'marthaalvarez@gmail.com',
            'password' => bcrypt('123456'),
            'cedula' => '20615951',
            'fecha_nacimiento' => '1991-09-06',
            'telefono' => '4146848568',
            'talla' => 'XXL',
            'direccion' => 'Valencia',
            'twitter' => '@marthaalvarez20',
            'instagram' => '@martha_20',
            'categoria' => 'Aficionado/Público General',
            'tipoEstPro' => 'N/A',
            'academia' => 'N/A',
            'esAdministrador' =>0,
            'lugar_id' =>7,
        ]);

        DB::table('recetas')->insert(['receta' => 'Pechugas de pollo con mermelada de durazno y jengibre',
                                        'modalidad' => 'Salado',
                                        'preparacion' => '6 Pechugas de pollo aliñadas con sal y ajo
                                                    6 Cdas. de mermelada de durazn
                                                    2 Cdas. de jengibre rallado o picadito
                                                    6 Cdas. de salsa de soya
                                                    1 Paquete de cebollines picaditos
                                                    1 Cdta. de picante al gusto
                                                    4 Duraznos frescos picaditos en tajaditas. 
                                                    Preparación: Aliñar las pechugas deshuesadas con ajos machacados y sal, 
                                                    preferiblemente desde el día anterior. Dorar en una sartén con mantequilla, 
                                                    por los dos lados, y colocar en un molde refractario o pyrex. 
                                                    Preparar la salsa mezclando todos los ingredientes: mermelada, 
                                                    jengibre rallado, salsa de soya, cebollines picaditos y picante al gusto. 
                                                    Cubrir las pechugas de pollo con la salsa. Tapar con papel aluminio y 
                                                    hornear por media hora a 350 ºC. Destapar y servir bien caliente con arroz de 
                                                    jasmine o parboiled y vegetales. Adornar con trozos de durazno frescos en rebanadas.',
                                        'raciones' => 6,
                                        'imagen' => '',
                                        'huevo' => 0,
                                        'pescado' => 0,
                                        'leche' => 0,
                                        'mani' => 0,
                                        'mariscos'  => 0,
                                        'soya' => 1,
                                        'nueces' => 0,
                                        'trigo' => 0,
                                        'gluten' => 0,
                                        'lactosa' => 0,
                                        'levadura' => 0,
                                        'user_id' => 1
        ]);
            
        DB::table('recetas')->insert(['receta' => 'Pollo con piña y pimentones',
            'modalidad' => 'Salado',
            'preparacion' => '1 Lata de piñas en almíbar picaditas en trocitos
6 Pechugas de pollo deshuesadas y cortadas en pedacitos
2 Pimentones rojos y 2 verdes picaditos
2 Cebollas picaditas
1 Paquete de cebollines picaditos
6 Dientes de ajo machacados
6 Cdas. de salsa de soya
4 Cdas. de mermelada de piña
4 Cdas. de aceite
Preparación
Picar las pechugas de pollo deshuesadas en trozos medianos y aliñarlos con los ajos machacados y un poco de salsa de soya.
Picar los vegetales en trozos.
En un caldero o wok freír en aceite, y por partes, los trozos de pollo, e ir apartando. Luego, freír las cebollas, los cebollines, y los pimentones rojos y verdes.
Unir el pollo, los vegetales y la piña en trozos, y sazonar con las tres cucharadas de salsa de soya, las cuatro cucharadas de mermelada de piña y el almíbar de las piñas en lata.
Servir con arroz blanco, al cual se le agregan cuatro cucharadas de maní picadito y una taza de pasitas.',
            'raciones' => 6,
            'imagen' => '',
            'huevo' => 0,
            'pescado' => 0,
            'leche' => 0,
            'mani' => 0,
            'mariscos'  => 0,
            'soya' => 1,
            'nueces' => 0,
            'trigo' => 0,
            'gluten' => 0,
            'lactosa' => 0,
            'levadura' => 0,
            'user_id' => 2
        ]);
        
        DB::table('recetas')->insert(['receta' => 'Suprema de pollo con salsa de cebolla y oporto',
            'modalidad' => 'Salado',
            'preparacion' => '6 pechugas de pollo deshuesadas
4 dientes de ajo machacados 
2 cdas. de salsa inglesa 
1 cdta. de sal 
Aceite para freír 
Salsa 
1 taza de oporto
3 cdas. de miel de abeja 
3 cebollas cortadas en tiritas 
1 cda. de finas hierbas 
2 cdas. de aceite de oliva
Preparación
Adobar la suprema de pollo con los ajos machacados, la salsa inglesa y la sal. Para preparar la salsa deben sudarse las cebollas cortadas en tiritas en aceite de oliva y, cuando éstas estén transparentes, agregar la miel de abeja, las finas hierbas y el oporto. Cocinar todo junto y añadir sal y pimienta al gusto. Una vez lista la salsa, cocinar las pechugas a la plancha por ambos lados. Acompañar con papitas colombianas cocinadas con perejil y mantequilla, puré de papas o arroz blanco.',
            'raciones' => 6,
            'imagen' => '',
            'huevo' => 0,
            'pescado' => 0,
            'leche' => 0,
            'mani' => 0,
            'mariscos'  => 0,
            'soya' => 0,
            'nueces' => 0,
            'trigo' => 0,
            'gluten' => 0,
            'lactosa' => 0,
            'levadura' => 0,
            'user_id' => 3
        ]);
            
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
