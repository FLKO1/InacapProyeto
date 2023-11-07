@extends('layouts.plantilla')

@section('title', 'Cita')
@section('content')
<h2> Ingrese sus datos </h2>
<div class="container">
    <form action="{{route('pacientes.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="rut">Ingrese su rut</label>
            <input type="text" id="rut" name="rut" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nombre"> Ingrese Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="apellido">Ingrese Apellido:</label>
            <input type="text" id="apellido" name="apellido" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="prevision">Seleccione su prevision</label>
            <select id="prevision" name="prevision" class="form-control" required>
                <option value="Fonasa">Fonasa</option>
                <option value="Isapre">Isapre</option>
                <option value="Ninguna">Ninguna</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>
@endsection