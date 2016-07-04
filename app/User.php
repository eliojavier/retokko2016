<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre', 'apellido', 'email', 'password', 'cedula',
							'fecha_nacimiento', 'telefono', 'talla', 'direccion', 'twitter',
                            'instagram', 'academia', 'categoria', 'tipoEstPro', 'lugar_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function setNombreAttribute($value)
	{
		$this->attributes['nombre'] = ucwords($value);
	}

    public function setApellidoAttribute($value)
    {
        $this->attributes['apellido'] = ucwords($value);
    }
    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }
    public function setTwitterAttribute($value)
    {
        $this->attributes['twitter'] = strtolower($value);
    }
    public function setInstagramAttribute($value)
    {
        $this->attributes['instagram'] = strtolower($value);
    }
}
