<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Categoria_producto;


class DatatableController extends Controller
{
    // public function listar_productos(){

    //     $producto = Productos::all();
    //     // $producto = Productos::select('id', 'name', 'etc')->get();
    //     return datatables($producto)->toJson();

    // }
    // public function listar_productos(){

    //     $_categoria_producto = Categoria_producto::find(5);
    //     dd($_categoria_producto->Productos);
    //     // header('Content-type:application/json;charset=utf-8');
    //     // return json_encode($_categoria_producto, JSON_PRETTY_PRINT);
    //     // return response()->json($_categoria_producto, 200 , []);
    //     // return datatables($_categoria_producto)->toJson();


    // }
    public function listar_productos(){

        $_categoria_producto = Productos::with('proveedor','categoria_producto')->get();
        return datatables($_categoria_producto)->toJson();
        // var_dump($_categoria_producto);
  
    }
}
