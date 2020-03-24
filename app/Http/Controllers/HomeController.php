<?php

namespace App\Http\Controllers;

use App\Clase;
use App\Teniente;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $cabeceras = obtenerCabecerasTablas('clases');
        $ruta_include_tabla = 'includes.tablas.clases';

        $cantidad = obtenerCantidad($request);
        $columna = obtenerColumna($request);
        $orden = obtenerOrden($request);
        $campo = obtenerCampo($request);

        $coleccion = Clase::orderBy($columna, $orden)
        ->nombre($campo)
        ->rango($campo)
        ->paginate($cantidad)->appends([
            'campo' => $campo,
            'cantidad' => $cantidad,
            'columna' => $columna,
            'orden' => $orden,
        ]);

        return view('home', compact('coleccion', 'cabeceras', 'ruta_include_tabla'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function componentes()
    {
        $nombre = "Octavio Oyanedel";
        return view('componentes', compact('nombre'));
    }
}
