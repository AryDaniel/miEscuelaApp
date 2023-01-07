@extends('master')

@section('contenido')
    <h1>Registrar Alumno</h1><hr>
    <form action="{{ url('/alumno/guardar') }}" method="POST">
        @csrf {{-- Esto se usa cuando el method es tipo POST --}}

        <div class="form-group">
            <label for="">No. Control:</label>
            <input type="text" class="form-control" name="n_control" value="123456" required>
        </div>
        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="Name" required>
        </div>
        <div class="form-group">
            <label for="">Edad:</label>
            <input type="number" class="form-control" name="edad" value="17" required>
        </div>

        <label for="">Sexo:</label><br>
        <input type="radio" name="sexo" value="1" checked> Másculino <br>
        <input type="radio" name="sexo" value="0"> Femenino <br><br>

        <div class="form-group">
            <label for="">Fecha nacimiento:</label>
            <input type="date" class="form-control" name="fecha_nacimiento" required>
        </div>

        <div class="form-group">
            <label for="">Domicilio:</label>
            <textarea name="domicilio" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="">Teléfono:</label>
            <input type="text" class="form-control" name="telefono" value="6677889900" required>
        </div>
        <div>
            <input type="submit" value="Registrar" class="btn btn-primary">
            <a href="{{ url('/alumnos') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop