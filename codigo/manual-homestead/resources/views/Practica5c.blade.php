<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href="css\Practica5_1.css" rel="stylesheet" type="text/css">
	<script src="js\practica5.js"></script>
	<title>conversor</title>
</head>
<body>

	<form>
		

	</form>


	<div class="conversor">
			<form action="enviar.php" method="post" id="formu">

				<select id="option" name="listas">

					<option value="peso"> Peso a Dolar</option>
					<option value="dolar">Dolar a peso </option>
					
					</select>

				<br>
				<br>

				
				<input type="text" id="moneda"   onkeypress="return numb(event)" onpaste="return false" placeholder="Inserte cantidad" required>
				<textarea id="convertido" placeholder=" " readonly="readonly"  > </textarea>
				<input type="reset"  value="Limpiar"  onclick="limpiar()" id="clear" >
				<input type="button"  value="Calcular"  onclick="conversor(option.value)"  id="calc" >

			</form>
	</div>
</body>
</html>