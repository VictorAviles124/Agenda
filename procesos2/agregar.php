<?php 


		require_once "../clases2/conexion.php";
	require_once "../clases2/crud.php";
	$obj= new crud();
	$datos=array(


		$_POST['nombre'],
		$_POST['paterno'],
		$_POST['materno'],
		$_POST['telefono'],
		$_POST['email'],
		$_POST['fecha']



				);

	echo $obj->agregar($datos);
	

 ?>