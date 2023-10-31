@extends('layouts.plantilla')

@section('title', 'Citas edit')
  
@section('content')

    <h1> Estas EDITANDO una cita</h1>
    <form action="{{route('citas.update', $cita)}}" method="POST">
        @csrf

        @method('put')
        <label>
            <div class="form-group">
                <label for="fecha">fecha:</label>
                <input type="date" id="fecha" name="fecha" value="{{$cita->fecha}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="hora_disponible">Horas Disponibles:</label>
                <input type="time" id="hora_disponible" name="hora_disponible" value="{{$cita->hora_disponible}}" class="form-control" required>
            </div>     
            <button type="submit" class="btn btn-primary">EDITAR Cita</button> 
    </form>
@endsection