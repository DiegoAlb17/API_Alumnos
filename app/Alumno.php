<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class Alumno extends Model {
	protected $fillable = ['id','dni', 'ape_1', 'ape_2', 'nombre', 'direccion', 'localidad', 'provincia', 'fecha_nac'];
}

?>