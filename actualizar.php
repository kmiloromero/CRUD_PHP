<?php
//incluye la clase libro y crud libro
require_once('crud_libro.php');
require_once('libro.php');
$crud=new CrudLibro();
$libro=new Libro();
$libro=$crud->obtenerLibro($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	<title>ACTUALIZAR BOOK</title>

	</head>
		<nav>
		    <div class="nav-wrapper">
		      <a class="brand-logo">Actualizar</a>
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		      </ul>
		    </div>
	  	</nav>
	<body>
	<form action='administrar_libro.php' method="post">
	<table class="highlight">
		<tr>
			<input type="hidden" name="id" value='<?php echo $libro->getId()?>'>
			<td style="width: 100px;">Nombre libro: </td>
			<td><input type="text" style="width: 70%;" name="nombre" value="<?php echo $libro->getNombre()?>"></td>
		</tr>
		<input type="hidden" name="actualizar" value='actualizar'>
	</table>
	<input class="waves-effect waves-light btn" type="submit" value="Guardar" >
	<a href="mostrar.php" class="waves-effect waves-light btn"><i class="material-icons left">arrow_back</i>Volver</a>
	</form>
</body>
</html>