<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<link href="css\ejercisio4_1.css" rel="stylesheet" type="text/css">

		<title>Ejercisio 4.1</title>

	</head>

	<body>
		<div class="formulario">
			<form action="enviar.php" method="post" id="formu">
				<h2 id="enc">Encuesta</h2>
				<input type="text" name="Nombre" placeholder="Nombre" required>
				<input type="text" name="Pais" placeholder="Pais" required>
				<input type="text" name="Estado" placeholder="Estado" required>
				<input type="text" name="Ciudad" placeholder="Ciudad" required>
				<textarea name="Velocidad" placeholder="Escriba aqui lo que opina de la Velocidad de la pagina" required></textarea>
				<textarea name="Disenio" placeholder="Escriba aqui lo que opina del diseño de la pagina" required></textarea>
				<input type="button" value="Enviar" id="boton" >
			</form>
			
		</div>
			
	</body>
</html>