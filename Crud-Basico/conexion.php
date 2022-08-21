<?php
	/**
	 * 
	 */
	class Db
	{
		private static $conexion=NULL;
		private function __construct(){}

		public static function conectar()
		{
			$pdo_options[PDO::ATT_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion=new PDO('mysql:localhost;dbname=biblioteca','root','',$pdo_options);
			return self::$conexion;
		}
	}
?>