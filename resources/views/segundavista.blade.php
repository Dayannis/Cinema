<!DOCTYPE html>
<html>
	<head>
		<title>Formulario</title>
	</head>
	<body>
		<form action="{{url('enviar')}}" method="post">
			Ingrese su nombre:
			<input type="text" name="name" size="20">
			<br>
			<input type="submit" value="enviar">
		</form>
	</body>
</html>