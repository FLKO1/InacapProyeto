<?php

namespace App\Http\Controllers;
use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index(){
        $citas = Cita::paginate();
        return view('citas.index', compact('citas'));
    }

    public function create(){
        return view('citas.create');
    }  
    
    public function show($id){
        $cita= Cita::find($id);

        return view('citas.show', compact('citas'));
    }
    

}
