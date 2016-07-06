<?php namespace App\Services;

use App\User;
use DateTime;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'nombre' => 'required|max:255',
			'apellido' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'cedula' => 'required|max:12',
			'password' => 'required|confirmed|min:6',
//			'fecha_nacimiento' => 'required',
//            'telefono' => 'required|max:50',
//            'talla' => 'required|max:10',
//            'direccion' => 'required|max:300',

		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		$fecha_formulario = DateTime::createFromFormat('d/m/Y', $data['fecha_nacimiento']);
        $fecha_nacimiento = $fecha_formulario->format('Y-m-d');
		return User::create([
			'nombre' => $data['nombre'],
            'apellido' => $data['apellido'],
			'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'cedula' => $data['cedula'],
            //'fecha_nacimiento' => $data['fecha_nacimiento'],
            'fecha_nacimiento' => $fecha_nacimiento,
            'telefono' => $data['telefono'],
            'talla' => $data['talla'],
            'direccion' => $data['direccion'],
            'twitter' => $data['twitter'],
            'instagram' => $data['instagram'],
            'academia' => $data['academia'],
			'categoria' =>$data['categoria'],
			'tipoEstPro' =>$data['tipoEstPro'],
            'lugar_id' => $data['estado']
		]);
	}
}
