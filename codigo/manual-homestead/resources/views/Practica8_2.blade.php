<!DOCTYPE html>
<html>
	<meta charset="utf-8" />
	<link href="css\Practica8.css" rel="stylesheet" type="text/css">
<head>
	<title>Practica 8</title>
</head>
<body>

	<h2>Nombre de la revista</h2>
	<input type="text" name="revista" id="revista" onkeypress=""  required>

	<h2>Numero</h2>
	<input type="text" name="numero" id="numero" onkeypress=""  required>

	<h2>Tipo</h2>
	<input type="text" name="tipo" id="tipo" onkeypress=""  required>

	<h2>Fecha</h2>
	<input type="text" name="fecha" id="fecha" onkeypress=""  required>

	<h2>Imagen de portada</h2>
	<input type="text" name="imagen" id="imagen" onkeypress=""  required>

	<br>
	<br>

	<form>
		<input type="button" value="Añadir imagen" onclick="add()" id="imgAdd" >
		<input type="button" value="Quitar imagen" onclick="quit()" id="imgQuit" >
	</form>

	<br>
	<br>

	<form>
		<input type="button" value="Guardar" onclick="" id="guardar" >
		<input type="button" value="Salir" onclick="" id="salir" >
	</form>

</body>
</html>