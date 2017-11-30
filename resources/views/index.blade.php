<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<form action="{{ url('api/alumno') }}" method="POST">
		<input type="text" name="dni" id="dni" placeholder="DNI" />
		<input type="text" name="nombre" id="nombre" placeholder="Nombre" />
		<input type="text" name="ape_1" id="ape_1" placeholder="Apellido 1" />
		<input type="text" name="ape_2" id="ape_2" placeholder="Apellido 2" />
		<input type="text" name="direccion" id="direccion" placeholder="Direccion" />
		<input type="text" name="localidad" id="localidad" placeholder="Localidad" />
		<input type="text" name="provincia" id="provincia" placeholder="Provincia" />
		<input type="date" name="fecha_nac" id="fecha_nac" placeholder="Fecha de nacimiento" />
		<button type="submit">Nuevo alumno</button>
	</form>
	<table>
		@foreach ($alumnos as $alumno)
	    	<tr>
	    		<td>{{ $alumno->dni }}</td>
	    		<td>{{ $alumno->nombre }}</td>
	    		<td>{{ $alumno->ape_1 }} {{ $alumno->ape_2 }}</td>
	    		<td>
	    			<form method="POST" action="{{ url('api/alumno') }}/{{ $alumno->id }}">
	    				<input type="hidden" name="_method" value="DELETE">
	    				<button type="submit">Borrar</button>
	    			</form>
	    		</td>
	    		<td>
	    			<form method="GET" action="{{ url('app/alumno') }}/{{ $alumno->id }}">
	    				<button type="submit">Editar</button>
	    			</form>
	    		</td>
	    	</tr>
		@endforeach
	</table>
</body>
</html>