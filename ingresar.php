<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
	<title>ingresar libro</title>
</head>
	<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">ingresa los datos del libro</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      </ul>
    </div>
  </nav>
<body>
	<form action="administrar_libro.php" method="post">
		<table style="margin-left: auto;margin-right: auto;">
			<tr>
				<td style="width: 100px;">Nombre libro: </td>
				<td><input type="text" name="nombre" style="width: 70%;"></td>
			</tr>
			<input type="hidden" name="insertar" value="insertar">
		</table>
		<a href="index.php"class="waves-effect waves-light btn"><i class="material-icons left">arrow_back</i>Volver</a>
		<a onclick="javascript: document.getElementById('submit').click()" class="waves-effect waves-light btn"><i class="material-symbols-outlined left">save</i>Guardar</a>
		<input class="waves-effect waves-light btn" type="submit" value="guardar" id="submit" style="visibility: hidden;">

	</form>
</body>
</ht
