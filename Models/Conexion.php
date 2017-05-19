<?php

	class Conexion
	{
		public function Conectar(){
			/*
			$db_servidor = "localhost";
			$db_usuario  = "id1709738_root";
			$db_password = "guayobarrios";
			$db_nombre   = "id1709738_proyectoactividad";   */

			
			$db_servidor = "localhost";
			$db_usuario  = "root";
			$db_password = "";
			$db_nombre   = "proyecto-actividad";  

			$conexion = new PDO("mysql:	host=$db_servidor;dbname=$db_nombre", $db_usuario, $db_password);
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexion->exec("SET CHARACTER SET utf8");
			return $conexion;
		}
	}
?>