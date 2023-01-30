Formulario edicion de Alumno

<form action="{{'/alumno'.$gatito->id}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('alumno.form');
</form>

