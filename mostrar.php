<?php
//incluye la clase libro y crud libro
require_once('crud_libro.php');
require_once('libro.php');
$crud=new CrudLibro();
$libro=new Libro();
$listaLibros=$crud->mostrar();
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<title>MOSTRAR BOOKS</title>
</head>
<body>
	<table border=1>
		<head>
			<td>Nombre</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaLibros as $libro) {?>
			<tr>
				<td><?php echo $libro->getNombre() ?></td>
				<td><a href="actualizar.php?id=<?php echo $libro->getId()?>&accion=a">Actualizar</a></td>
				<td><a href="administrar_libro.php?id=<?php echo $libro->getId()?>&accion=e">Eliminar</a></td>
			</tr>
			<?php }?>
		</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>