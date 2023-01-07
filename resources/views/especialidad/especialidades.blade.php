@extends('master')

@section('contenido')
<br>
    <h1>Consultar especialidades</h1><hr>
    <a href="{{url('/especialidad/registrar')}}" class="btn btn-secondary">Registrar especialidad</a><br><br>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($especialidades as $e)
                <tr>
                    <td>{{ $e->id }}</td>
                    <td>{{ $e->nombre }}</td>
                    <td>
                        <a href="{{url('/especialidad/editar')}}/{{$e->id}}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="{{url('/especialidad/eliminar')}}/{{$e->id}}" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{$especialidades->links()}}
    </div>

@stop

<style>
    div nav ul {
        justify-content: center;
    }
</style>