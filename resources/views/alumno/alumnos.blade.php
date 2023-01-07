@extends('master')

@section('contenido')
    <h1>Listado de alumnos</h1><hr>
    <a href="{{ url('/alumno/registrar') }}" class="btn btn-secondary">Registrar Alumno</a><br><br>
    <table class="table table-hover">
        <thead>
            <th>ID</th>
            <th>No. Control</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Sexo</th>
            <th>Fecha de nacimiento</th>
            <th>Domicilio</th>
            <th>Teléfono</th>
            <th>Opciones alumnos</th>
        </thead>
        <tbody>
            @foreach ($alumnos as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->n_control }}</td>
                    <td>{{ $a->nombre }}</td>
                    <td>{{ $a->edad }}</td>
                    <td>{{ $a->sexo }}</td>
                    <td>{{ $a->fecha_nacimiento }}</td>
                    <td>{{ $a->domicilio }}</td>
                    <td>{{ $a->telefono }}</td>
                    <td>
                        <a href="" class="btn btn-primary btn-sm">Editar</a>
                        <a href="{{url('/alumno/eliminar')}}/{{$a->id}}" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        {{$alumnos->links()}}
    </div>

@stop

<style>
    div nav ul {
        justify-content: center;
    }
</style>