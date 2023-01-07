@extends('master')

@section('contenido')
    <h1>Registrar Alumno</h1><hr>
    <form action="{{url('/alumno/actualizar')}}/{{$alumno->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">ID:</label>
            <input value="{{$alumno->id}}" type="text" class="form-control" name="n_control" disabled>
        </div>
        <div class="form-group">
            <label for="">No. Control:</label>
            <input value="{{$alumno->n_control}}" type="text" class="form-control" name="n_control" required>
        </div>
        <div class="form-group">
            <label for="">Nombre:</label>
            <input value="{{$alumno->nombre}}" type="text" class="form-control" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="">Edad:</label>
            <input value="{{$alumno->edad}}"  type="number" class="form-control" name="edad" required>
        </div>
        <label for="">Sexo:</label><br>

        @if ($alumno->sexo == 1)
            <input type="radio" name="sexo" value="1" checked> Másculino <br>
            <input type="radio" name="sexo" value="0"> Femenino <br><br>
        @else
            <input type="radio" name="sexo" value="1"> Másculino <br>
            <input type="radio" name="sexo" value="0" checked> Femenino <br><br>
        @endif

        <div class="form-group">
            <label for="">Fecha de nacimiento:</label>
            <input value="{{$alumno->fecha_nacimiento}}"  type="date" class="form-control" name="fecha_nacimiento" required>
        </div>
        <div class="form-group">
            <label for="">Domicilio:</label>
            <textarea name="domicilio" cols="30" rows="10" class="form-control">{{$alumno->domicilio}}</textarea>
        </div>
        <div class="form-group">
            <label for="">Teléfono:</label>
            <input value="{{$alumno->telefono}}"  type="text" class="form-control" name="telefono" required>
        </div>
        <div>
            <input type="submit" value="Guardar" class="btn btn-primary">
            <a href="{{ url('/alumnos') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop