<?php 
	session_start();
	unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="images/favicon.png" >
</head>
<body>
<header>
	<div class="w3-container w3-black w3-center">
		<h1>Bienvenido al portal de Mr. Potato!!!</h1>
	</div>
</header>

	
	<div class="w3-container w3-green">
		<h2>Inicio de sesion</h2>
	</div>

	<form class="w3-container" action="controller_login.php" method="post">
		<p>
			<label class="w3-label">
				Usuario
			</label>
			<input class="w3-input w3-border " type="text" name="usuario">
		</p>
		<p>
			<label class="w3-label">Contraseña</label>
			<input class="w3-input w3-border" type="password" name="pas">
		</p>
		<p>
			<input type="hidden" name="entrar" value="entrar">
			<button class="w3-btn w3-green">Aceptar</button>
		</p>
		<p>Si aún no tienes cuenta  <a href="registrarse.php">Registrarse</a></p>
	</form>
<footer>
	<div class="w3-container w3-black">
		<h4>¡Disfruta, vive, sueña y come papas!</h4>
	</div>
</footer>
</body>
</html>