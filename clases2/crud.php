


<?php 

	class crud{
		public function agregar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="INSERT into t_agenda (nombre,paterno,materno, telefono, email,fecha)
									values ('$datos[0]','$datos[1]',
											'$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]')";

											

			return mysqli_query($conexion,$sql);
		}

		public function obtenDatos($idagenda){
			$obj= new conectar();
			$conexion=$obj->conexion();

			   $sql="SELECT id_agenda,
							nombre,
							paterno,
							materno,
							telefono,
							email,
							fecha
					from t_agenda
					where id_agenda='$idagenda'";


			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_agenda' => $ver[0],
				'nombre' => $ver[1],
				'paterno' => $ver[2],
				'materno' => $ver[3],
				'telefono' => $ver[4],
				'email' => $ver[5],
				'fecha' => $ver[6]

				);
			return $datos;
		}

			public function actualizar($datos){
				$obj= new conectar();
				$conexion=$obj->conexion();

				$sql="UPDATE t_agenda set nombre='$datos[0]',
											paterno='$datos[1]',
											materno='$datos[2]',
											telefono='$datos[3]',
											email='$datos[4]',
											fecha='$datos[5]'
							where id_agenda='$datos[6]'";
				return mysqli_query($conexion,$sql);
			}
			public function eliminar($idagenda){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from t_agenda where id_agenda='$idagenda'";
			return mysqli_query($conexion,$sql);
		}
	}

 ?>