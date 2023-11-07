<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index(){

    }
    public function create(){
        return view("paciente.create");
    }

    public function store(Request $request){
     $request->validate([
        'rut' => 'required|string|max:10',
        'nombre'=> 'required|string|max:20',
        'apellido'=> 'required|string|max:20',
        'correo'=> 'required|string|max:50',
        'telefono'=> 'required|string|max:12',
        'prevision'=>'required|in:Fonasa,Isapre,Ninguna',
     ]);
     $pacientes= new Paciente([
     'rut' => $request->input('rut'),
     'nombre'=> $request->input('nombre'),
     'apellido'=> $request->input('apellido'),
     'correo'=> $request->input('correo'),
     'telefono'=> $request->input('telefono'),
     'prevision'=> $request->input('prevision'),
     ]);
     $pacientes->save();
     return redirect('/paciente/create')->with('success','Se ingresaron los datos exitosamente');
    }


}
