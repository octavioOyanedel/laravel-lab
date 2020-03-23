<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tabla extends Component
{

    public $coleccion;
    public $cabeceras;
    public $ruta;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($coleccion, $cabeceras, $ruta)
    {
        $this->coleccion = $coleccion;
        $this->cabeceras = $cabeceras;
        $this->ruta = $ruta;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tabla');
    }
}
