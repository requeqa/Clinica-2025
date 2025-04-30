<?php
namespace App\Http\Controllers\Farmacia;

use App\Http\Controllers\Controller;
use App\Models\Farmacia\Producto; // Asegúrate de que este modelo existe
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function crear()
    {
        return view('Farmacia.Catalogo_Producto');
    }

    public function guardar(Request $request)
    {
        $producto = new Producto();
        $producto->categoria = $request->categoria;
        $producto->codigo_item = $request->codigo_item;
        $producto->unidad = $request->unidad;
        $producto->proveedor = $request->proveedor;
        $producto->controla_stock = $request->controla_stock;
        $producto->activo = $request->activo;
        $producto->save();

        return redirect()->back()->with('success', 'Producto guardado');
    }
}
