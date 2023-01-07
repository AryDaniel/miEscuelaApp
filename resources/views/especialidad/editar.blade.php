@extends('master')

@section('contenido')
    <h1>Editar Especialidad</h1><hr>
    <form action="{{url('/especialidad/actualizar')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nombre:</label>
            <input value="{{$especialidad->nombre}}" type="text" class="form-control" name="nombre" required>
        </div>
        <div>
            <input type="submit" value="Guardar" class="btn btn-primary">
            <a href="{{ url('/especialidades') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop