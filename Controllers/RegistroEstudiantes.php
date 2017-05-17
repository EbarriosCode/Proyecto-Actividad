<?php 
	
	require_once("../Models/RegistroEstudiantes.php");
	$model = new Estudiante();

	if(isset($_POST['btn-registrar']))
	{
		$nombres = htmlentities(addslashes($_POST['nombres']));
		$apellidos = htmlentities(addslashes($_POST['apellidos']));
		$correo = htmlentities(addslashes($_POST['correo']));
		$telefono = htmlentities(addslashes($_POST['telefono']));
		$establecimiento = htmlentities(addslashes($_POST['establecimiento']));
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