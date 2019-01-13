<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link href="css\Practica6.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="js\practica6.js"></script>

	<title>Practica 6</title>
</head>
<body>

	<div class="stok">

		<table>
			<tr>
				<th>Producto</th>
				<th>Categoria</th>
				<th>Existencia</th>
				<th>Modificar</th>
			</tr>
			<tr id="ta0">
				<td>Tarjeta Nvidea 1070  3GB</td>
				<td>Tarjeta Grafica</td>
				<td > <input type="text" name="user" id="cant0" value = "2" readonly="readonly" onpaste="return false"></td>
				<td>
					<form> 
						<input type="button" value="+" onclick="mas0()" id="mas" >
						<input type="button" value="-" onclick="menos0()" id="menos" >

					</form>
				</td>
			</tr>
			<tr id="ta1">
				<td>Monitor HD Samsung 144HZ</td>
				<td>Monitor</td>
				<td> <input type="text" name="user" id="cant1" value = "1" readonly="readonly" onpaste="return false"></td>
				<td>
					<form> 
						<input type="button" value="+" onclick="mas1()" id="mas" >
						<input type="button" value="-" onclick="menos1()" id="menos" >

					</form>
				</td>
			</tr>
			<tr id="ta2">
				<td>Memori Ram 8 Gb Hypper X</td>
				<td>Memoria Ram</td>
				<td> <input type="text" name="user" id="cant2" value = "0" readonly="readonly" onpaste="return false"></td>
				<td>
					<form> 
						<input type="button" value="+" onclick="mas2()" id="mas" >
						<input type="button" value="-" onclick="menos2()" id="menos" >

					</form>
				</td>
			</tr>
			<tr id="ta3">
				<td>Memori Ram 8 Gb Corsair </td>
				<td>Memoria Ram</td>
				<td > <input type="text" name="user" id="cant3" value = "3" readonly="readonly" onpaste="return false"></td>
				<td>
					<form> 
						<input type="button" value="+" onclick="mas3()" id="mas" >
						<input type="button" value="-" onclick="menos3()" id="menos" >

					</form>
				</td>
			</tr>
		</table>
		
	</div>

	
	<div class="control">

		<input type="button" value="Solo ver rojos" onclick="red()" id="filtro" >
		<br>
		<br>
		<form>
			
			<input type="button" value="Selecionar" onclick="filt()" id="filtro" >
			
			<select id="option" name="listas">

				<option value="todo"> Todo</option>
				<option value="grafica"> Tarjetas graficas</option>
				<option value="monior">Monitores </option>
				<option value="ram">Memorias ram </option>
						
			</select>

		</form>
		
	</div>
	

	<div class="conteo">
		<table>
			<tr>
				<th>Numero total de Producto</th>
				<td colspan="2"> <input type="text" name="user" id="totalP" value = "6" readonly="readonly" onpaste="return false"></td>
			</tr>
			<tr>
				<th> Numero total de categorias</th>
				<td colspan="2"><input type="text" name="user" id="totalC" value = "3" readonly="readonly" onpaste="return false"></td>
			</tr>
			<tr >
				<th rowspan="4" >Totales de productos en existencia por categoría</th>
			</tr>

			<tr>
				<td id="tgraficas">Tarjetas graficas = </td>
				<td><input type="text" name="user" id="tgraf" value = "2" readonly="readonly" onpaste="return false"></td>
			</tr>

			<tr>
				<td id="tmoniores">Monitores = </td>
				<td><input type="text" name="user" id="tmonf" value = "1" readonly="readonly" onpaste="return false"></td>
			</tr>
				
			<tr>
				<td id="trams">Memorias Ram = </td>
				<td><input type="text" name="user" id="tra" value = "3" readonly="readonly" onpaste="return false"></td>
			</tr>
				
				
				
				
			
		</table>

		<form id="filtro">
			<input type="button" value="Recalcular" onclick="recalcular()" id="calcular" >
		</form>
		
	</div>



	

</body>
</html>