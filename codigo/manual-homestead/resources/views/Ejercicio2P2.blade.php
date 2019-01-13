<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js\practica7_2.js"></script>
	<script src="js\nodo.js"></script>
	<title>Ejercisio 2-4 P2</title>
</head>
<body>

	<div class="ejercicio2">
		<h2>De Hola y adios  ¿Cual tiene mas palabras?</h2>
		<input type="button" name="el boton" onclick="caracter()" id="elboton" value="Determinar cual es mayor">
		<input type="text" name="first" id="grande"  readonly="readonly" onpaste="return false" >
		<br>

		<h2>Introduce un numero mas grande que 2</h2>
		<input type="text" name="first" id="numero" onkeypress="return numb(event)" onpaste="return false" required>
		<input type="button" value="Comprobar" onclick="verdad()" id="boton" >
		<br>
		<br>
		<input type="text" name="first" id="realidad" readonly="radonly" onpaste="return false" required>
		<br>

		<h2>Realizar operaciones aritmeticas</h2>
		<input type="button" value="Calcular" onclick="aritmetica()" id="boton" >
		<p>5+2=</p>
		<input type="text" name="first" id="suma" onkeypress="return numb(event)" readonly="readonly" onpaste="return false" >
		<p>5-2=</p>
		<input type="text" name="first" id="resta" onkeypress="return numb(event)" readonly="readonly" onpaste="return false" >
		<p>5*2=</p>
		<input type="text" name="first" id="mul" onkeypress="return numb(event)" readonly="readonly" onpaste="return false" >
		<p>5/2=</p>
		<input type="text" name="first" id="divi" onkeypress="return numb(event)" readonly="readonly" onpaste="return false" >
		
	</div>

	<div class="ejercicio3">

		<h2>Calcular el factorial de un numero</h2>
		<input type="button" name="el boton" onclick="factorial()" id="elboton" value="Factorial">
		<input type="text" name="first" id="facinput" onkeypress="return numb(event)" onpaste="return false" >
		<h2>Resultado</h2>
		<input type="text" name="first" id="resfac"  readonly="readonly" onpaste="return false" >
		<input type="text" name="first" id="par"  readonly="readonly" onpaste="return false" >
		
	</div>

	<div class="ejercicio4">
		<h2>Escribe un numero para saber si es es mayucuculas o minusculas</h2>
		<input type="button" name="el boton" onclick="esPar()" id="elboton" value="Es par?">
		<input type="text" name="first" id="parInput" onkeypress="return soloLetras(event)" onpaste="return false" >
		<br>
		<br>
		<input type="text" name="first" id="par1"  readonly="readonly" onpaste="return false" >


		<h2>Escribe una frase para ver si es palindomo</h2>
		<input type="button" name="el boton" onclick="esPalindromo()" id="elboton" value="Comprobar">
		<input type="text" name="first" id="palidromo" onkeypress="return soloLetras(event)" onpaste="return false" >
		<br>
		<h2>Es plindromo? </h2>	
		<input type="text" name="first" id="palindrin"  readonly="readonly" onpaste="return false" >
		
	</div>



</body>
</html>