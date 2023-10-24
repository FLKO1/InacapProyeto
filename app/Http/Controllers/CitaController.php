<?php

namespace App\Http\Controllers;
use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    public function index(){
        $citas = Cita::paginate();
        return view("");
    }

    public function create(){
        return view("");
    }  
    
    public function show(){
        return view("");
    }
    

}
