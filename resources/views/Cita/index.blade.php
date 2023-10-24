@extends('layouts.plantilla')

@section('title', 'Cita')
  
@section('content')
    <h1>Bienvenido a la pagina principal de citas</h1>
    <a href="{{route('citas.create')}}"Crear Cita></a>
    <ul>
        @foreach ($citas as $cita)
        <li>{{$citas->paciente_id}}</li>
        <li>{{$citas->especialidad_id}}</li>
        <li>{{$citas->estado_id}}</li>
        <li>{{$citas->fecha}}</li>
             
        @endforeach
    </ul>

        {{$citas->links}}

@endsection