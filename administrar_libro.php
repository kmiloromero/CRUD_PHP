<?php
//incluye la clase libro y crud libro
require_once('crud_libro.php');
require_once('libro.php');
$crud=new CrudLibro();
$libro=new Libro();

	//si el elemeto no viene nulo llama al crud e insertar un libro
	if(isset($_POST['insertar'])){
		print_r($_POST);
		$libro->setNombre($_POST['nombre']);
	// llama funcion bsertar def en crud
		$crud->insertar($libro);
		header('Location: index.php');
	//
	}elseif (isset($_POST['actualizar'])) {
		$libro->setId($_POST['id']);
		$libro->setNombre($_POST['nombre']);
		$crud->actualizar($libro);
		header('Location: index.php');
	}elseif($_GET['accion']=='e'){
		$crud->eliminar($_GET['id']);
		header('Location: index.php');
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}

?>