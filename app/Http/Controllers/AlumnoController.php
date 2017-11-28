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
  
    public function getAlumno($id){
  
        $Alumno  = Alumno::find($id);
  
        return response()->json($Alumno);
    }
  
    public function createAlumno(Request $request){
  
        $Alumno = Alumno::create($request->all());
  
        return response()->json($Alumno);
  
    }
  
    public function deleteAlumno($id){
        $Alumno  = Alumno::find($id);
        $Alumno->delete();
 
        return response()->json('Deleted');
    }
  
    public function updateAlumno(Request $request,$id){
        $Alumno  = Alumno::find($id);
        $Alumno->nombre = $request->input('nombre');
        $Alumno->ape_1 = $request->input('ape_1');
        $Alumno->ape_2 = $request->input('ape_2');
        $Alumno->direccion = $request->input('direccion');
        $Alumno->localidad = $request->input('localidad');
        $Alumno->provincia = $request->input('provincia');
        $Alumno->title = $request->input('fecha_nac');
        $Alumno->save();
  
        return response()->json($Alumno);
    }
 
}

?>