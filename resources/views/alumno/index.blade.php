Mostrar lista de alumnos :) MATUSITA by Salomon Rengifo
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>ApellidoPaterno</th>
            <th>ApellidoMaterno</th>
            <th>GradoSeccion</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $gatitos as $alumno )
        <tr>
            <td>{{$alumno->id }}</td>
            <td>{{ $alumno->Foto }}</td>
            <td>{{ $alumno->Nombre }}</td>
            <td>{{ $alumno->ApellidoPaterno }}</td>
            <td>{{ $alumno->ApellidoMaterno }}</td>
            <td>{{ $alumno->GradoSeccion }}</td>
            <td>{{ $alumno->Correo }}</td>
            <td>
                
                <a href="{{url('/alumno/'.$alumno->id.'/edit') }}">
                    EDITAR
                </a>

                <form action="{{ url('/alumno/'.$alumno->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">

                </form>

            </td>

        </tr>
        @endforeach

    </tbody>
</table>