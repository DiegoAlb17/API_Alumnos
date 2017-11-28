<?php 

namespace App;
  
use Illuminate\Database\Eloquent\Model;
  
class Alumno extends Model {
	protected $primaryKey = "dni";
	protected $fillable = ['dni', 'ape_1', 'ape_2', 'nombre', 'direccion', 'localidad', 'provincia', 'fecha_nac'];
}

?>