<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // Crea la columna 'id' (clave primaria autoincremental)
            $table->string('nombre'); // Crea la columna 'nombre' (cadena de texto)
            $table->text('descripcion')->nullable(); // Crea la columna 'descripcion' (texto largo, opcional)
            $table->decimal('precio', 8, 2); // Crea la columna 'precio' (decimal con 8 dígitos y 2 decimales)
            $table->string('imagen')->nullable(); // Crea la columna 'imagen' (ruta de la imagen, opcional)
            // Agrega aquí otros campos que necesites para tus productos
            $table->timestamps(); // Crea las columnas 'created_at' y 'updated_at' (marcas de tiempo)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos'); // Elimina la tabla 'productos' si se revierte la migración
    }
}