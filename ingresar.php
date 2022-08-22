<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<title>ingresar libro</title>
</head>
<header>ingresa los datos del libro</header>
<body>
	<form action="administrar_libro.php" method="post">
		<table>
			<tr>
				<td>Nombre libro: </td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<input type="hidden" name="insertar" value="insertar">
		</table>
		<input type="submit" value="guardar">
		<a href="index.php">Volver</a>
	</form>
</body>
</html>