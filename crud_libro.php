<?php

require_once("conexion.php");
	/**
	 * 
	 */
	class CrudLibro{
		
		public function __construct () {}

		public function insertar($libro){
			$db=Db::conectar();
			$insert=$db->prepare("INSERT INTO libros VALUES(NULL,:nombre)");
			$insert->bindValue("nombre",$libro->getNombre());
			$insert->execute();
		}

		public function mostrar (){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query("SELECT * FROM libros");

			foreach ($select->fetchAll() as $libro) {
				$myLibro=new Libro();
				$myLibro->setId($libro["id"]);
				$myLibro->SetNombre($libro['nombre']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}

		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare("DELETE FROM libros where ID=:id");
			$eliminar->bindValue("id",$id);
			$eliminar->execute();	
		}

		public function obtenerLibro($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * from libros where ID=:id');
			$select->bindValue("id",$id);
			$select->execute();
			$libro=$select->fetch();
			$myLibro=new Libro();
			$myLibro->setId($libro['id']);
			$myLibro->setNombre($libro['nombre']);
			return $myLibro;
		}

		public function actualizar(){
			$db=Db::conectar();
			$actualizar=$db->prepare("update libros set nombre=:nombre where id=:id");
			$actualizar->bindValue("id",$libro->getId());
			$actualizar->bindValue("nombre",$libro->getNombre());
			$actualizar->execute();
		}
	}
?>