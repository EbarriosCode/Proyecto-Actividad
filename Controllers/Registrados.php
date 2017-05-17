<?php
	session_start();
	//echo $_SESSION['Usuario'];
	if (!isset($_SESSION['Usuario'])) {
		header(("Location:../index.php"));		
	}

	if($_SESSION['acceso'] == 0)
		header(("Location:../index.php?acces=fail"));
	

	require_once("../Models/RegistroEstudiantes.php");
	
	// Inicia paginación
	$cant_filas = new Estudiante();
	$pagination = new Estudiante();	
	$no_registros = 5;

	if(isset($_GET['pagina']))
	 {
		if($_GET['pagina'] == 1)
		{
			header("Location:Registrados.php");
		}
		else{
			$inicio = $_GET['pagina'];
			//$nuevo_inicio = ($inicio-1)*$no_registros;
		}
	}
	
	if(!(isset($_GET['pagina'])))
	{
		$inicio = 1;
	}		
	
	$nuevo_inicio = ($inicio-1)*$no_registros;
	
	$listaEstudiantes = $pagination->listarEstudiantes($nuevo_inicio,$no_registros);
	
	$total_registros = count($cant_filas->numRegistros());
	$total_paginas = ceil($total_registros/$no_registros);

	//var_dump($Asignados);
	// fin paginación

	if(isset($_POST['btn-export']))
	{
		$estudiantes = new Estudiante();

		date_default_timezone_set('America/Guatemala');
		require_once '../PHPExcel-1.8/Classes/PHPExcel.php';

		$objPHPexcel = new PHPExcel();
		
		// propiedades de el archivo excel
		$objPHPexcel->getProperties()->setCreator("Eduardo_Barrios_Dev")
		->setLastModifiedBy("UMG")
		->setTitle("Reporte Estudiantes Registrados")
		->setDescription("")
		->setKeywords("")
		->setCategory("");

		

		// cabecera de la consulta
		$y = 1;
		$objPHPexcel->setActiveSheetIndex(0)
		->setCellValue("A".$y, "Nombres")
		->setCellValue("B".$y, "Apellidos")
		->setCellValue("C".$y, "Correo")
		->setCellValue("D".$y, "Teléfono")
		->setCellValue("E".$y, "Establecimiento");


			foreach($estudiantes->listarEstudiantes(false,false) as $Model)
			{
				$y++;

                // insertar los valores
                $objPHPexcel->setActiveSheetIndex(0)
                ->setCellValue("A".$y, $Model['nombres'])
                ->setCellValue("B".$y, $Model['apellidos'])
                ->setCellValue("C".$y, $Model['correo'])
                ->setCellValue("D".$y, $Model['telefono'])               
                ->setCellValue("E".$y, $Model['establecimiento']);
		
			}

		// datos de la salida de excel
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment; filename=Registro-Estudiantes.xlsx');
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPexcel,'Excel2007');
		$objWriter->save('php://output');
		exit;
	}

	require_once("../Views/Registrados.php");
 ?>