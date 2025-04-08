<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> {{-- Si usas Tailwind CSS o Bootstrap --}}
</head>
<body>
    <div class="container">
        <h1>Catálogo de Productos</h1>

        @foreach($productos as $producto)
            <div class="producto">
                <h2>{{ $producto->nombre }}</h2>
                <p>{{ $producto->descripcion }}</p>
                <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}"> {{-- Si tienes imágenes --}}
                <p>Precio: {{ $producto->precio }}</p>
                {{-- ... otros detalles del producto ... --}}
            </div>
        @endforeach
    </div>

    <script src="{{ asset('js/app.js') }}"></script> {{-- Si usas JavaScript --}}
</body>
</html>
