<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>
	<table>
		@foreach ($alumnos as $alumno)
	    	<tr>
	    		<td>{{ $alumno->dni }}</td>
	    		<td>{{ $alumno->nombre }}</td>
	    		<td>{{ $alumno->ape_1 }} {{ $alumno->ape_2 }}</td>
	    	</tr>
		@endforeach
	</table>
	
</body>
</html>