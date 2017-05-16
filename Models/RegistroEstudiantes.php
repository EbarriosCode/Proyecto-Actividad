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
	}

	//$r = new Estudiante();
	//print_r($r->RegistrarEstudiante('Eduardo','Barrios','guayoswing@gmail.com','54441004','Colegio Mixto Retalhuleu','192.168.101.1'));
	//print_r($r->RegistrarEstudiante('Mafer','Herrera','marifer17te@hotmail.com','41793176','no estudio','192.168.101.2'));
 ?>