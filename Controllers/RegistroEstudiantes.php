<?php 
	
	require_once("../Models/RegistroEstudiantes.php");
	$model = new Estudiante();

	if(isset($_POST['btn-registrar']))
	{
		$nombres = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];
		$establecimiento = $_POST['establecimiento'];
		$ipNavegador = $_POST['ipNavegador'];

		$registrado = $model->RegistrarEstudiante($nombres,$apellidos,$correo,$telefono,$establecimiento,$ipNavegador);

		if($registrado)
		{
			//echo "<script>alert('Se ha registrado Correctamente');";
			header('Location:../index.php?registrado=true');
		}
		else{
			//echo "<script>alert('Usted ya esta registrado');";
			//echo "window.location.href='../'</script>";
			header('Location:../index.php?registrado=false');
		}
	}

 ?>