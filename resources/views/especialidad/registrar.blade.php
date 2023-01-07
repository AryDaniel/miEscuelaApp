@extends('master')

@section('contenido')
    <h1>Registrar Especialidad</h1><hr>
    <form action="{{ url('/especialidad/guardar') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div>
            <input type="submit" value="Registrar" class="btn btn-primary">
            <a href="{{ url('/especialidades') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop