<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teniente extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'nombre',
    ];

    /**
     * los clases que pertenecen a el teniente.
     */
    public function clasesTeniente()
    {
        return $this->hasMany('App\ClaseTeniente');
    }

}
