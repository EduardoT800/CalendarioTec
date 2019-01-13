<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href="css\Practica7.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js\practica7_2.js"></script>
	<title>Practica 7</title>
</head>
<body>

	<form>
		<p>Inserte 2 numeros del 1 al 100 para hacer una tabla de pitagoras</p>
		<input type="text" name="first" id="fila" onkeypress="return numb(event)" onpaste="return false" required>
		<input type="text" name="second" id="columna" onkeypress="return numb(event)" onpaste="return false" required>
		<input type="button" value="Calcular" onclick="pitagoras()" id="Pitagoras" >
	</form>

	<div id="tabla" >
		
	</div>

	<form>
		<p>Inserte los datos para el IMC</p>
		<p>Inserte peso en KG</p>
		<input type="text" name="first" id="peso" onkeypress="return numb(event)" onpaste="return false" required>
		<p>Inserte Estatura en centiumetros</p>
		<input type="text" name="second" id="estatura" onkeypress="return numb(event)" onpaste="return false" required>
		<input type="button" value="Calcular" onclick="IMC()" id="imc" >
	</form>

		<p>Resultado</p>
		<input type="text" name="second" id="resultado" readonly="readonly" onpaste="return false" required>

</body>
</html>