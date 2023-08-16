<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;    use Illuminate\Http\Request;
use App\Models\Productos;               use App\Models\Proveedor;
use App\Models\Categoria_producto;      use App\Models\Medidas;

class controller_productos extends Controller
{
    public function index()
    {
        $productos = Productos::with('show_proveedor','show_categoria_producto','show_medida')->get();
        $medida = Medidas::select('id', 'nombre AS text')->get(); 
        $categoria_prod = Categoria_producto::select('id', 'nombre AS text')->get();
        $proveedor = Proveedor::select('id', 'nombre AS text')->get(); 

        $data = [
            "productos" => $productos,
            "medida" => $medida,
            "proveedor" => $proveedor,
            "categoria_prod" => $categoria_prod
        ];
        return View('productos.index', $data);
    }

    //Mostrar el formulario para crear un nuevo recurso.
    public function create()
    {
        $proveedor = Proveedor::select('id', 'nombre AS text')->get(); 
        $medida = Medidas::select('id', 'nombre AS text')->get(); 
        $categoria_prod = Categoria_producto::select('id', 'nombre AS text')->get();
        $data = [
            "proveedor" => $proveedor,
            "medida" => $medida,
            "categoria_prod" => $categoria_prod
        ];
        return View('productos.add_producto', $data);
    }

    //Almacene un recurso recién creado en el almacenamiento.
    public function store(Request $request)
    {
        $producto = new Productos;
        $producto->codigo = $request->select_cod;
        $producto->nombre = $request->select_nombre;
        $producto->id_medida = $request->select_medida;
        $producto->id_categoria = $request->select_categoria;
        $producto->id_proveedors = $request->select_proveedor;
        $producto->descripcion = $request->select_descripcion;
        $producto->stock = 0;
        $producto->imagen = 1;
        $producto->timestamps = false;
        $producto->save();

        return View('productos.add_producto');
        
    }

    //Muestra el recurso especificado.
    public function show()
    {
        $detail_producto = Productos::with('show_proveedor','show_categoria_producto','show_medida')->where('codigo', '7622300095871')->get();

        return View('productos.show_producto', ['detail_producto'=>$detail_producto]);
    }


     //Muestra el formulario para editar el recurso especificado.
    public function edit(string $id)
    {
        //
    }

    //Actualice el recurso especificado en el almacenamiento.
    public function update(Request $request, string $id)
    {
        //
    }

    // Elimina el recurso especificado del almacenamiento.
    public function destroy(string $id)
    {
        //
    }
}
