<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;

class ProductosController extends Controller
{
    public function get_productos()
    {
        $obj_productos = new Producto();

        $productos = $obj_productos->get_productos();

        if(!$productos){
            return response()->json([
                'msg' => 'error',
                'data' => 'Error al cargar productos'
            ]);
        }

        return response()->json([
            'msg' => "ok",
            'data' => $productos
        ]);
    }
}