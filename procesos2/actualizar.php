<?php 


		require_once "../clases2/conexion.php";
	require_once "../clases2/crud.php";
	$obj= new crud();
	$datos=array(
		
		$_POST['nombreU'],
		$_POST['paternoU'],
		$_POST['maternoU'],
		$_POST['telefonoU'],
		$_POST['emailU'],
		$_POST['fechaU'],

		$_POST['idgasto']
				);

	echo $obj->actualizar($datos);
	

 ?>