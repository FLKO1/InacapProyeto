@extends('layouts.plantilla')

@section('title', 'Cita')
  
@section('content')

    <h1> Estas creando una cita</h1>
    <form action="{{route('citas.store')}}" method="POST">
        @csrf
        <label>
            <div class="form-group">
                <label for="fecha">fecha:</label>
                <input type="date" id="fecha" name="fecha" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="hora_disponible">Horas Disponibles:</label>
                <input type="time" id="hora_disponible" name="hora_disponible"class="form-control" required>
            </div>
            <div class="form-group">  
                <label for="especialidad_id">Especialidad</label>
                <select id="especialiadad_id" name="especialidad_id" class="form-control" required>
                    @foreach($especialidades as Especialidad)
                    <option value="{{$especialidad->id}}">{{especialidad->nameespecialidades}}</option>
                    @endforeach
                </select>
            </div>     
            <button type="submit" class="btn btn-primary">Guardar Cita</button> 
    </form>
@endsection