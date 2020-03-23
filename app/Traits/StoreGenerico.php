<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\Request;

trait StoreGenerico {

    public static function testStore(Request $request, Object $objeto)
    {
        $atributos = $request->except('_token');
        $objeto->create($atributos);        
    }

    public static function testUpdate(Request $request, Object $objeto)
    {
        $atributos = $request->except('_token');
        $objeto->update($atributos);
    }

    public static function testDelete(Object $objeto)
    {
        $objeto->destroy($objeto->id);
    }

}