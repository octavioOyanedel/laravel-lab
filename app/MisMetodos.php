<?php

use Illuminate\Http\Request;

/**
 * Metodo de prueba
 */
function testDesdeMisMetodos() 
{
    return 'Todo OK.';
}

function existeError($errors, $nombre) 
{
    if ($errors->any() && $errors->has($nombre)){
        return 'is-invalid';
    }   
    return '';
}

function obtenerCabecerasTablas($nombre)
{
    switch ($nombre) {
        case "clases":
            return array("Nombre"=>"nombre", "Rango"=>"rango");
            break;
        case "tenientes":
            return array("Nombre"=>"nombre");
            break;
    }
}

/**
 * Filtros
 */

function obtenerCantidad(Request $request)
{
    if ($request->cantidad != '' && $request->cantidad != 'Cantidad')
    {     
        return $request->cantidad;
    }
    return 10;
}

function obtenerColumna(Request $request)
{
    if ($request->columna != '' && $request->columna != 'Columna')
    {     
        return $request->columna;
    }
    return 'created_at';
}

function obtenerOrden(Request $request)
{
    if ($request->orden != '' && $request->orden != 'Orden')
    {     
        return $request->orden;
    }
    return 'DESC';
}

function obtenerCampo(Request $request)
{
    if ($request->campo != '')
    {    
        return $request->campo;
    }
    return '';
}