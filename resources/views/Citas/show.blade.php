@extends('layouts.plantilla')

@section('title', 'Cita' . $cita->id)
  
@section('content')
    <h1>Cita de {{$cita->paciente_id}}</h1>
    <a href="{{route('citas.index')}}">Atras </a>
    <br>
    <a href="{{route('citas.edit, $cita')}}">Editar Cita </a>
    <p><strong>Especialidad: </strong>{{$cita->especialidad_id}}</p>
    <p><strong>Fecha:</strong>{{$cita->fecha}}</p>
    <p><strong>Estado:</strong>{{$cita->estado_id}}</p>        
@endsection