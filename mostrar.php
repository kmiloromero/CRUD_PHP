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
	<style>
thead {color:white;}
}
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<title>MOSTRAR lIBROS</title>
</head>
	<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Consultar libro</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      </ul>
    </div>
  </nav>
<body>
	<table class="highlight divider " border=1 >
        <thead class="card-panel teal lighten-2">
          <tr>
			  <div id="divTest" style="border:10px solid white;"></div>
              <th>Nombre</th>
              <th>Actualizar</th>
              <th>Eliminar</th>

          </tr>
        </thead>

        <tbody>
        	<?php foreach ($listaLibros as $libro) {?>
          <tr>
            <td><?php echo $libro->getNombre() ?></td>
				<td><a href="actualizar.php?id=<?php echo $libro->getId()?>&accion=a">Actualizar</a></td>
				<td><a href="administrar_libro.php?id=<?php echo $libro->getId()?>&accion=e">Eliminar</a></td>
          </tr>
          <?php }?>
        </tbody>
      </table>	
	<a href="index.php">Volver</a>
</body>
</html>