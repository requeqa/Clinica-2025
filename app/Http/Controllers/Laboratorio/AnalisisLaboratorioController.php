<?php

namespace App\Http\Controllers\Laboratorio;

use App\Models\Laboratorio\AnalisisLaboratorio;
use Illuminate\Http\Request;

class AnalisisLaboratorioController extends Controller
{
    public function index()
    {
        // Recupera todos los registros de la base de datos
        $analisis = AnalisisLaboratorio::all();

        // Envía los datos a la vista
        return view('Laboratorio.index', compact('analisis'));
    }
}