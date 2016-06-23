<?php namespace App\Services;

use App\User;
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
		/*	'nombre' => 'required|max:255',
			'apellido' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'cedula' => 'required|max:12',
			'password' => 'required|confirmed|min:6',
			'fecha_nacimiento' => 'required',
            'telefono' => 'required|max:50',
            'talla' => 'required|max:10',
            'direccion' => 'required|max:300',
         */
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
		return User::create([
			'name' => $data['nombre'],
            'last_name' => $data['apellido'],
			'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'doc_id' => $data['cedula'],
            'birthday' => $data['fecha_nacimiento'],
            'phone' => $data['telefono'],
            'size' => $data['talla'],
            'address' => $data['direccion'],
            'twitter' => $data['twitter'],
            'instagram' => $data['instagram'],
            'academy' => $data['academia'],
		]);
	}
}
