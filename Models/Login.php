<?php 
	require_once("Conexion.php");

	class Usuarios extends Conexion{

		public function entrarSystem($usuario,$password)
		{
			$sql = "SELECT nombreUsuario,password FROM usuarios WHERE nombreUsuario = '$usuario' AND password = '$password'";
			$resultado = Conexion::Conectar()->prepare($sql);

			$resultado->execute();
			$numFilas = $resultado->rowCount();

			if($numFilas == 1)
				return true;

			else
				return false;

			$resultado->close();
		}

		public function autenticar($usuario)
		{
			$sql = "SELECT idUsuario,acceso FROM usuarios WHERE nombreUsuario = '$usuario';";
			$resultado = Conexion::Conectar()->prepare($sql);

			$resultado->execute();
			return $resultado->fetchAll();
			$resultado->close();
		}
	}


 ?>