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
        //$coleccion = Teniente::orderBy('nombre','ASC')->paginate(10);        
        //$cabeceras = obtenerCabecerasTablas('tenientes');
        //$ruta_include_tabla = 'includes.tablas.tenientes';

        //dd($request);

        $coleccion = Clase::orderBy('nombre','ASC')->paginate(10);
        $cabeceras = obtenerCabecerasTablas('clases');
        $ruta_include_tabla = 'includes.tablas.clases';

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
