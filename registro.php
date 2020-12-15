<!DOCTYPE html>
<html>
<head>
	<title>Registro de usuario</title>
	<link rel="stylesheet" href="style.css">
	<?php require_once "dependencias.php"; ?>
</head>
<body>
	<div align = "center" class="container" class="h-100 bg-primary">
		<h1>Registro de usuarios</h1>
		<div >
			<div class="col-sm-4">
				<form action="procesos/registro.php" method="post">
					<!--EXT-->
					
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" class="form-control" required="">

					<label for="apellido">Apellido Paterno</label>
					<input type="text" name="apellido" class="form-control" required="">

					<label for="email">Email</label>
					<input type="email" name="email" class="form-control" required="">
					<!--FIN --> 
					  



					<label for="usuario">Usuario</label>
					<input type="text" name="usuario" class="form-control" required="">
					<label for="password">Password</label>
					<input type="text" name="password" class="form-control" required="">
					
					<br>
					<button class="btn btn-danger">Registrar</button>
					<a href="index.php" >Logear</a>
				</form>
			</div>
		</div>
	</div>
</body>
</html>