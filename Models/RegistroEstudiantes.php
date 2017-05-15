<?php 
	require_once("Conexion.php");

	class Registro extends Conexion
	{
		public function Registrar($nombres,$apellidos,$correo,$telefono,$establecimiento,$ip)
		{
			$sql = "INSERT INTO registroestudiantes(nombres,apellidos,correo,telefono,establecimiento,ipNavegador,fechaRegistro)
					VALUES('$nombres','$apellidos','$correo','$telefono','$establecimiento','$ip',curdate())";

			$stmt = Conexion::Conectar()->prepare($sql);

			if($stmt->execute())
				return true;

			else
				return false;

			$stmt->close();
		}
	}

	$r = new Registro();
	//print_r($r->Registrar('Eduardo','Barrios','guayoswing@gmail.com','54441004','Colegio Mixto Retalhuleu','192.168.101.98'));
	print_r($r->Registrar('Mafer','Herrera','marifer17te@hotmail.com','41793176','no estudio','192.168.101.2'));
 ?>