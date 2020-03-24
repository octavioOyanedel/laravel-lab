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
     * scope modelo clase
     */

    public function scopeNombre($query, $campo)
    {
        if($campo != null){
            return $query->orWhere('nombre', 'LIKE', "%$campo%");
        }
    }

    public function scopeRango($query, $campo)
    {
        if($campo != null){
            return $query->orWhere('rango', 'LIKE', "%$campo%");
        }
    }    

    /**
     * los clases que pertenecen a el teniente.
     */
    public function clasesTeniente()
    {
        return $this->hasMany('App\ClaseTeniente');
    }
}
