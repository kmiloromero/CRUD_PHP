<?php
//incluye la clase libro y crud libro
require_once('crud_librp.php');
require_once('libro.php');
$crud=new CrudLibro();
$libro=new Libro();
$listaLibros=$crud->obtenerLibror($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ACTUALIZAR BOOK</title>
</head>
<body>
	<form action='administrar_libro.php' method="post">
	<table>
		<tr>
			<input type="hidden" name="id" value="<?php echo $libro->getId()?>">
			<td>Nombre libro:</td>
			<td><input type="text" name="nombre" value="<?php echo $libro ->getNombre()?>"></td>
		</tr>
	</table>
	<input type="submit" value="Guardar">		
	
	<a href="index.php">Volver</a>
	</form>
</body>
</html>