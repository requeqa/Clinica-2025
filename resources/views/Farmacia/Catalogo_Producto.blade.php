@extends('Farmacia.layouts.app')

@section('content')
<div class="container">
  <h2>Registro de Producto</h2>
  <form method="POST" action="{{ route('producto.guardar') }}">
    @csrf

    <!-- Categoría -->
    <div class="mb-3">
      <label class="form-label">Categoría *</label>
      <select name="categoria" required class="form-select">
        <option value="">Seleccione una</option>
        <option value="LIMPIEZA">Limpieza</option>
        <option value="MEDICINA">Medicina</option>
      </select>
    </div>

    <!-- Código Item -->
    <div class="mb-3">
      <label class="form-label">Código Ítem *</label>
      <input type="text" name="codigo_item" class="form-control" required>
    </div>

    <!-- Unidad -->
    <div class="mb-3">
      <label class="form-label">Unidad *</label>
      <select name="unidad" required class="form-select">
        <option value="">Seleccione</option>
        <option value="UNIDAD">Unidad</option>
        <option value="CAJA">Caja</option>
      </select>
    </div>

    <!-- Proveedor -->
    <div class="mb-3">
      <label class="form-label">Proveedor</label>
      <select name="proveedor" class="form-select">
        <option value="">Seleccione</option>
        <option value="PROVEEDOR1">Proveedor 1</option>
        <option value="PROVEEDOR2">Proveedor 2</option>
      </select>
    </div>

    <!-- Controla Stock -->
    <div class="mb-3">
      <label class="form-label d-block">¿Controla Stock?</label>
      <div class="form-check form-check-inline">
        <input type="radio" name="controla_stock" value="SI" checked class="form-check-input">
        <label class="form-check-label">Sí</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="controla_stock" value="NO" class="form-check-input">
        <label class="form-check-label">No</label>
      </div>
    </div>

    <!-- Activo -->
    <div class="mb-3">
      <label class="form-label d-block">¿Activo?</label>
      <div class="form-check form-check-inline">
        <input type="radio" name="activo" value="SI" checked class="form-check-input">
        <label class="form-check-label">Sí</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" name="activo" value="NO" class="form-check-input">
        <label class="form-check-label">No</label>
      </div>
    </div>

    <!-- Campos desactivados -->
    <div class="mb-3">
      <label class="form-label">Nombre del ítem</label>
      <input type="text" class="form-control" disabled>
    </div>

    <div class="mb-3">
      <label class="form-label">Stock mínimo</label>
      <input type="number" class="form-control" disabled>
    </div>

    <div class="mb-3">
      <label class="form-label">Descripción</label>
      <textarea class="form-control" disabled></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>
@endsection
