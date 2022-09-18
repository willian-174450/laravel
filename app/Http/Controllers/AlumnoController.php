<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function index(){
        //return DB::select("select * from alumnos");
        $alumnos = Alumno::all();
        return view('alumnos.index',compact('alumnos'));
    }

    public function create(){
        return view('alumnos.create');
    }
    public function store(Request $request)
    {

        //return $request->all();
        $alumno = new Alumno();
        $alumno->cod_estudiante = $request->codigo;
        $alumno->dni = $request->dni;
        $alumno->nombres = $request->name;
        $alumno->apellidos = $request->apellidos;
        $alumno->save();

        return redirect()->route('alumnos.index');

    }
}
