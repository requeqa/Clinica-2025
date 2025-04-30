<h1>Listado de Análisis de Laboratorio</h1>
    <!-- Botón para agregar nuevo análisis -->
    <a href="{{ route('nuevo_analisis') }}" class="btn btn-success">Nuevo Análisis de Laboratorio</a>
<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio Particular Normal</th>
            <th>Precio Particular Emergencia</th>
            <th>Costo Estándar</th>
            <th>Aplica Comisión</th>
            <th>Muestra</th>
            <th>Método</th>
            <th>Grupo de Análisis</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        //@foreach ($analisis as $analisis)
            <tr>
                <td>{{ $analisis->Nombre }}</td>
                <td>{{ $analisis->Precio_Particular_Normal }}</td>
                <td>{{ $analisis->Precio_Particular_Emergencia }}</td>
                <td>{{ $analisis->Costo_Estandar }}</td>
                <td>{{ $analisis->Aplica_Comision ? 'Sí' : 'No' }}</td>
                <td>{{ $analisis->Muestra }}</td>
                <td>{{ $analisis->Metodo }}</td>
                <td>{{ $analisis->Grupo_Analisis }}</td>
                <td>
                    <a href="{{ route('formato', ['id' => $analisis->id]) }}" class="btn btn-primary">Formato</a>

                    <a href="{{ route('editar', ['id' => $analisis->id]) }}" class="btn btn-warning">Editar</a>

                    <form action="{{ route('eliminar', ['id' => $analisis->id]) }}" method="POST" style="display:inline;">

                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este análisis?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Estilos opcionales -->
<style>
    .btn {
        padding: 5px 10px;
        margin: 2px;
        text-decoration: none;
        color: white;
        border-radius: 5px;
    }
    .btn-primary { background-color: blue; }
    .btn-warning { background-color: orange; }
    .btn-danger { background-color: red; }
    .btn-success { background-color: #240047; }
</style>
