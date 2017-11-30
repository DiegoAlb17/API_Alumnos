<!DOCTYPE html>
<html>
<head>
	<title>Editar alumno: {{ $alumno->dni }}</title>
</head>
<body>
	<form action="{{ url('api/alumno') }}/{{ $alumno->id }}" method="POST">
		<input type="hidden" name="_method" value="PUT">
		<input type="text" name="nombre" id="nombre" value="{{ $alumno->nombre }}" />
		<input type="text" name="ape_1" id="ape_1" value="{{ $alumno->ape_1 }}" />
		<input type="text" name="ape_2" id="ape_2" value="{{ $alumno->ape_2 }}" />
		<input type="text" name="direccion" id="direccion" value="{{ $alumno->direccion }}" />
		<input type="text" name="localidad" id="localidad" value="{{ $alumno->localidad }}" />
		<input type="text" name="provincia" id="provincia" value="{{ $alumno->provincia }}" />
		<input type="date" name="fecha_nac" id="fecha_nac" value="{{ $alumno->fecha_nac }}" />
		<button type="submit">Editar alumno</button>
	</form>
</body>
</html>