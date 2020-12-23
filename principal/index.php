<?php


session_start();

if (empty($_SESSION['active'])) {
    header('location: ../');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/estilo_principal.css">
	<title>Principal</title>
</head>
<body>
	<div class="conteiner">
		
			<header class="header">Bienvenido </header>

			<section class="section">
				
				<div class="div-opcion1"> <a href="../vista/admiUsuario.php"> <img src="../img/usuarios (1).png" height="" width="" alt=""> Gestionar Usuarios</a></div>

				<div class="div-opcion2"><a href=""> <img src="../img/edit.png" height="" width="" alt=""> Gestionar Alumnos</a> </div>


				<div class="div-opcion3"> <a href=""> <img src="../img/profesor.png" height="" width="" alt=""> Gestionar Docentes</a></div>



				<div class="div-opcion4"> <a href=""> <img src="../img/pagos.png" height="" width="" alt=""> Gestionar Pagos</a></div>


				<div class="div-opcion5"><a href=""> <img src="../img/asistencia.png" height="" width="" alt=""> Asistencia</a></div>
				<div class="div-opcion6"></div>



			</section>

			<footer class="footer"><a href="cerrarSesion.php">Salir</a></footer>

		
    </div>
    <!-- <a href="cerrarSesion.php">Salir</a> -->
</body>
</html>