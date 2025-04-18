Lista de Empleados



@if(Session::has('mensaje'));

    {{ Session::get('mensaje'); }}

@endif

<table class="table table-light">

    <thead class="thead-light">
        <th>#</th>
        <th>Foto</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Correo</th>
        <th>Acciones</th>
    </thead>

    <tbody>
        @foreach ( $empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>
                    <img src="{{ asset('storage/'.$empleado->Foto) }}" alt="" width="100" height="100">
                </td>
                <td>{{ $empleado->Nombre }}</td>
                <td>{{ $empleado->ApellidoPaterno }}</td>
                <td>{{ $empleado->ApellidoMaterno }}</td>
                <td>{{ $empleado->Correo }}</td>
                <td>
                    <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">Editar</a>
                    <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('¿Deseas eliminar el registro?')"  value="Borrar" />
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    
</table>
<br>
<br>
<br>
<a href="{{ url('empleado/create') }}"> Registrar Nuevo Empleado</a>