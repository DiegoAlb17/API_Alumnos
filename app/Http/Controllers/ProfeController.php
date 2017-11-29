<?php

namespace App\Http\Controllers;
  
use App\Profe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfeController extends Controller{

	public function index(){
		$Profes  = Profe::all();
		return response()->json($Profes);
  
    }
  
    public function getProfe($id){
  
        $Profe  = Profe::find($id);
  
        return response()->json($Profe);
    }
  
    public function createProfe(Request $request){
  
        $Profe = Profe::create($request->all());
  
        return response()->json($Profe);
    }
  
    public function deleteProfe($id){
        $Profe  = Profe::find($id);
        $Profe->delete();
 
        return response()->json('Deleted');
    }
  
    public function updateProfe(Request $request,$id){
        $Profe  = Profe::find($id);
        $Profe->nombre = $request->input('nombre');
        $Profe->ape_1 = $request->input('ape_1');
        $Profe->ape_2 = $request->input('ape_2');
        $Profe->direccion = $request->input('direccion');
        $Profe->localidad = $request->input('localidad');
        $Profe->provincia = $request->input('provincia');
        $Profe->title = $request->input('fecha_ing');
        $Profe->save();
  
        return response()->json($Profe);
    }
 
}

?>