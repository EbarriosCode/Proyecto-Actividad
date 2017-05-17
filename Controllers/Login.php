<?php 
	
	$usu = htmlentities(addslashes($_POST['usuario']));
	$pass = htmlentities(addslashes($_POST['password']));
	
	require_once('../Models/Login.php');
	
	$usersLogeados = new Usuarios(); 

		//$usersLogeados->setUsuario();
		
			if ($usersLogeados->entrarSystem($usu,$pass))
			{
				$verificacion = $usersLogeados->autenticar($usu);
				foreach($verificacion as $autenticado)
				{
					$id = $autenticado['id'];
					$acceso = $autenticado['acceso'];
				}
				//echo "Existe -- Usuario";
				session_start();
				$_SESSION['Usuario'] = $usu;				
				$_SESSION['idUser'] = $id;
				$_SESSION['acceso'] = $acceso;
				//echo $_SESSION['Usuario'];

				header("Location:Registrados.php?user=$usu&acces=$acceso");		
			}

			else
			{
				header("Location:../index.php?boolean=false");
			}		

 ?>