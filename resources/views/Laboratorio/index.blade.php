<table>
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
        @foreach ($analisis as $analisis)
            <tr>
                <td>{{ $analisis->nombre }}</td>
                <td>{{ $analisis->precio_particular_normal }}</td>
                <td>{{ $analisis->precio_particular_emergencia }}</td>
                <td>{{ $analisis->costo_estandar }}</td>
                <td>{{ $analisis->aplica_comision ? 'Sí' : 'No' }}</td>
                <td>{{ $analisis->muestra }}</td>
                <td>{{ $analisis->metodo }}</td>
                <td>{{ $analisis->grupo_analisis }}</td>
                <td>
                    <a href="#">Editar</a>
                    <a href="#">Eliminar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>