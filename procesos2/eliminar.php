<?php 


		require_once "../clases2/conexion.php";
	require_once "../clases2/crud.php";

	$obj= new crud();

	echo $obj->eliminar($_POST['idgasto']);

 ?>