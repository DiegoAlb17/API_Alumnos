<?php

namespace App\Http\Controllers;
  
use App\Alumno;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumnoController extends Controller{

	public function index(){
		$Alumnos  = Alumno::all();
		return response()->json($Alumnos);
    }

    public function showAlumnos(){
        $Alumnos  = Alumno::all();
        return view('index')->with('alumnos', $Alumnos);
    }

    public function editAlumno($id){
        $Alumno  = Alumno::find($id);
        return view('editAlumno')->with('alumno', $Alumno);
    }
  
    public function getAlumno($id){
  
        $Alumno  = Alumno::find($id);
  
        return response()->json($Alumno);
    }
  
    public function createAlumno(Request $request){
        $Alumno = Alumno::create($request->all());
        return redirect('app/alumno');
    }
  
    public function deleteAlumno($id){
        $Alumno = Alumno::find($id);

        if ($Alumno != null) {
            $Alumno->delete();
            return redirect('app/alumno');
        }
        return redirect('app/alumno');
    }
  
    public function updateAlumno(Request $request,$id){
        $Alumno  = Alumno::find($id);
        $Alumno->nombre = $request->input('nombre');
        $Alumno->ape_1 = $request->input('ape_1');
        $Alumno->ape_2 = $request->input('ape_2');
        $Alumno->direccion = $request->input('direccion');
        $Alumno->localidad = $request->input('localidad');
        $Alumno->provincia = $request->input('provincia');
        $Alumno->fecha_nac = $request->input('fecha_nac');
        $Alumno->save();
        return redirect('app/alumno');
    }
 
}

?>