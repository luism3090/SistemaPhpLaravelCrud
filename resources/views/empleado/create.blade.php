Formulario de creación de empleados

<form action="{{ url('/empleado') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('empleado.form',['modo'=>'Crear']);
</form>