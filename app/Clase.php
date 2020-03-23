<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'nombre','rango',
    ];

    /**
     * los clases que pertenecen a el teniente.
     */
    public function clasesTeniente()
    {
        return $this->hasMany('App\ClaseTeniente');
    }
}
