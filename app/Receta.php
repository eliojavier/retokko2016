<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreReceta', 'modalidad', 'ingredientes', 'preparacion',
        'raciones', 'imagen', 'alergenicos', 'intolerancias'];

    public function setRecetaAttribute($value)
    {
        $this->attributes['receta'] = ucwords($value);
    }

    public function setPreparacionAttribute($value)
    {
        $this->attributes['preparacion'] = ucfirst($value);
    }
}
