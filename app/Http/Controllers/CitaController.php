<?php

namespace App\Http\Controllers;
use App\Models\Cita;
use App\Models\Especialidad;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index(){
        $citas = Cita::orderBy('id', 'desc')->paginate();
        return view('citas.index', compact('citas'));
    }

    public function create(){
        return view('citas.create');
    } 
    
    public function store(Request $request){
        
        $request->validate([
            'fecha'=> 'required|date',
            'hora_disponible'=> 'required|time',
            'especialidad_id'=> 'required|exists:especialidad,id',
        ]);
        $citas = new Cita([
            'fecha' => $request->input('fecha'),
            'hora_disponible'=> $request->input('hora_disponible'),
            'especialidad_id'=> $request->input('especialidad_id'),
        ]);

        $especialidad = Especialidad::find( $request->input('especialidad_id'));
        $especialidad->citas()->save($citas);
        
        return redirect('/citas.create')->with('success','Cita medica CREADA exitosamente!');
    }
    
    public function show(Cita $cita){

        return view('citas.show', compact('cita'));
    }

    public function edit(Cita $cita){

      return view('citas.edit', compact('cita'));
    }
    
    public function update(Request $request, Cita $cita){
        $cita->fecha = $request->fecha;
        $cita->hora_disponibles = $request->hora_disponibles;
       
        $cita->save();

        return redirect('/citas.create')->with('success','Cita medica ACTUALIZADA exitosamente!');
    }
    
}
