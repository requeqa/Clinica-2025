<?php

namespace App\Models\Laboratorio;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisisLaboratorio extends Model
{
    use HasFactory;

    protected $table = 'AnalisisLaboratorio'; // Asegúrate de que el nombre coincida con tu tabla

    protected $fillable = [
        'ID',
        'Nombre',
        'Precio_Particular_Normal',
        'Precio_Particular_Emergencia',
        'Costo_Estandar',
        'Aplica_Comision',
        'Muestra',
        'Metodo',
        'Grupo_Analisis',
        'Opciones',
    ];
}