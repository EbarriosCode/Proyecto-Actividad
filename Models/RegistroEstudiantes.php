<?php 
	require_once("Conexion.php");

	class Estudiante extends Conexion
	{
		public function RegistrarEstudiante($nombres,$apellidos,$correo,$telefono,$establecimiento,$ip)
		{
			$sql = "INSERT INTO registroestudiantes(nombres,apellidos,correo,telefono,establecimiento,ipNavegador,fechaRegistro)
					SELECT * FROM (SELECT'$nombres','$apellidos','$correo','$telefono','$establecimiento','$ip',curdate()) AS tmp
					WHERE NOT EXISTS(SELECT ipNavegador FROM registroestudiantes WHERE ipNavegador='$ip') LIMIT 1";

			$stmt = Conexion::Conectar()->prepare($sql);

			if($stmt->execute())
			{
				if($stmt->rowCount() >= 1)
					return true;

				else
					return false;
			}
			else
			{
				return false;
			}
			$stmt->close();
		}

		public function listarEstudiantes($inicio=false, $no_registros=false)
		{
			if($inicio!==false && $no_registros!==false)
			{
				$sql = "SELECT nombres,apellidos,correo,telefono,establecimiento,fechaRegistro FROM registroestudiantes
					    ORDER BY fechaRegistro DESC LIMIT $inicio,$no_registros";
			}
			else{
				$sql = "SELECT nombres,apellidos,correo,telefono,establecimiento,fechaRegistro FROM registroestudiantes
					    ORDER BY fechaRegistro DESC";
			}

			$stmt = Conexion::Conectar()->prepare($sql);
			$stmt->execute();

			return $stmt->fetchAll();
			$stmt->close();
		}

		public function numRegistros()
		{
			$sql = "SELECT id FROM registroestudiantes";
			$resultado = Conexion::Conectar()->prepare($sql);
			$resultado->execute();
			return $resultado->fetchAll();			 
		}
	}

	//$r = new Estudiante();
	//print_r($r->listarEstudiantes());
 ?>