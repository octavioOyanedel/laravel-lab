<?php
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