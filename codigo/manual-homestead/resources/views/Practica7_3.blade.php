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
		<p>Botos para el pri</p>
		<input type="text" name="first" id="pri" onkeypress="return numb(event)" onpaste="return false" required>
		<p>Botos para el pan</p>
		<input type="text" name="second" id="pan" onkeypress="return numb(event)" onpaste="return false" required>
		<p>Botos para Morena</p>
		<input type="text" name="second" id="mo" onkeypress="return numb(event)" onpaste="return false" required>
		<p>Botos para Movimiento Naranja</p>
		<input type="text" name="second" id="na" onkeypress="return numb(event)" onpaste="return false" required>
		
	</form>
	<br>
	<br>
	<input type="button" value="Calcular" onclick="vote()" id="ganador" >
	<br>
	<br>

	
	<div id="ganador">
		<table>
			<tr>
				<td id="pr">  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/PRI_logo_%28Mexico%29.svg/1200px-PRI_logo_%28Mexico%29.svg.png"  width="150" height="150" /> </td>
				<td id="pa">  <img src="https://upload.wikimedia.org/wikipedia/commons/8/8b/Logo_PAN.jpg"  width="150" height="150" /></td>
				<td id="amlo">  <img src="https://i1.wp.com/www.ecosdelacosta.mx/wp-content/uploads/2017/04/Logo-MORENA-Partido-Pol%C3%ADtico.jpg?w=350&ssl=1"  width="150" height="150" /> </td>
				<td id="yuagui"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIL7IPdaWQUtGvzZ24OZ3MtR6F6BtQFqzqbhc07OY6QI6s_db7zg"  width="150" height="150" /> </td>

			</tr>
		</table>
	</div>
</body>
</html>