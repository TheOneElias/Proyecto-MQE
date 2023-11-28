<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Saldo.css">
	<title>Consulta de saldo</title>
</head>
<body>
	<div class="head">
		<div class="logo">
			<a href="#">Logo</a>
		</div>
		<div class="navar">
			<a href="#">Inicio</a>
			<a href="#">consulta saldo</a>
			<a href="#">pago servicios</a>
			<a href="#">transferencia</a>
		</div>
	</div>


	<form method="post">
		<h1>Consulta de Saldo</h1>
		<div class="boxcont">
			<div class="box">
				<br><br>
				<input class="campo" type="text" name="nombre" placeholder="Nombre" readonly>
				<br><br>
				<input class="campo" type="text" name="email" placeholder="E-mail" readonly>
				<br><br>
				<input class="campo" type="text" name="cuenta" placeholder="Cuenta" readonly>
				<br><br>
				<input class="campo" type="text" name="saldo" placeholder="Saldo" readonly>
				<br><br>
				<input class="boton" type="submit" value="Volver" name="Volver">	
			</div>		
		</div>
	</form>
	<?php
		include ("registrar.php"); 
	?>
</body>
</html>