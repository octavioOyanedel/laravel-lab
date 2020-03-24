<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClaseTeniente extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'teniente_id','clase_id',
    ];


    /**
     * Relaciones desde modelo Teniente hasta modelo Clase
     */

    /**
     * los clases que pertenecen a el teniente.
     */
    public function tenientes()
    {
        return $this->belongsToMany('App\Teniente');
    }

    /**
     * los clases que pertenecen a el teniente.
     */
    public function clase()
    {
        return $this->belongsTo('App\Clase');
    }

    /**
     * Relaciones desde modelo Clase hasta modelo Teniente
     */

    /**
     * los clases que pertenecen a el teniente.
     */
    public function clases()
    {
        return $this->belongsToMany('App\Clase');
    }

    /**
     * los clases que pertenecen a el teniente.
     */
    public function teniente()
    {
        return $this->belongsTo('App\Teniente');
    }
}
