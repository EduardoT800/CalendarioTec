<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="css\Practica7.css" rel="stylesheet" type="text/css">
	<link href="css\Practica8.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js\practica7_1.js"></script>

	<title>Practica 8</title>
</head>
<body>
	<table>
		<tr>
			<td id="tx"> User: </td>
			<td>
				
					
					<input type="text" name="user" id="user" onkeypress="return soloLetras(event)" onpaste="return false" required>
				
			</td>
		</tr>
		<tr>
			<td id="tx"> Pass: </td>
			<td>
					 
					<input type="password" name="user" value="" id="pass" onkeypress="return soloNumeros(event)" readonly="readonly" 
					maxlength="8" 	onpaste="return false" required>
			</td>
		</tr>
		<tr>
			<td colspan="2">
					<input type="button" value="Entrar" onclick="log()" id="login" >
			</td>
		</tr>

	</table>

	<div class="teclado">
		<form>
		<input type="button" value="1" onclick="numbe1()" id="numb1" >
		<input type="button" value="2" onclick="numbe2()" id="numb2" >
		<input type="button" value="3" onclick="numbe3()" id="numb3" >
	</form>

	<form>
		<input type="button" value="4" onclick="numbe4()" id="numb4" >
		<input type="button" value="5" onclick="numbe5()" id="numb5" >
		<input type="button" value="6" onclick="numbe6()" id="numb6" >
	</form>

	<form>
		<input type="button" value="7" onclick="numbe7()" id="numb7" >
		<input type="button" value="8" onclick="numbe8()" id="numb8" >
		<input type="button" value="9" onclick="numbe9()" id="numb9" >
	</form>

	<form>
		<input type="button" value="C" id="numb" >
		<input type="button" value="0" onclick="numbe0()" id="numb0" >
		<input type="button" value="←" onclick="borraru()" id="numba" >
	</form>
		
	</div>

	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

	<div class="modal fade" id="myModal" role="dialog">
	    <div class="modal-dialog">
	    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Bienvenido</h4>
	        </div>
	        <div class="modal-body">
	          <p>¿Que desea hacer?</p>
	        </div>
	        <div class="modal-footer">
	        	<button type="button" class="btn btn-success" data-dismiss="modal">Agregar registros</button>
	          	<button type="button" class="btn btn-info" data-dismiss="modal">Modificar registros</button>
	        </div>
	      </div>
	      
	    </div>
	 </div>



</body>
</html>