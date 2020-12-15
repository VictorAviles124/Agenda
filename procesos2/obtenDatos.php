<?php 


		require_once "../clases2/conexion.php";
	require_once "../clases2/crud.php";

	$obj= new crud();

	echo json_encode($obj->obtenDatos($_POST['idagenda']));

 ?>