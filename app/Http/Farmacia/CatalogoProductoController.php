<?php
namespace App\Http\Controllers;
use App\Models\Producto; // Asegúrate de que este modelo existe
use Illuminate\Http\Request;

class CatalogoProductoController extends Controller
{
    public function index() {
        $productos = Producto::all(); // Obtiene todos los productos de la base de datos
        return view('catalogo_productos', compact('productos'));
    }
}