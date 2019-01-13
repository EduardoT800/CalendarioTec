<!DOCTYPE html>
<html lang="es">

<html>
<head>

	<meta charset="utf-8">
	 <link href="css\calendariocss\adminmaster.css" rel="stylesheet" type="text/css">
	 <link href="css\calendariocss\adminContenedor.css" rel="stylesheet" type="text/css">
	 <link href="css\calendariocss\adminHerramientas.css" rel="stylesheet" type="text/css">
	 <link href="css\calendariocss\calendarioAdmin.css" rel="stylesheet" type="text/css">

	 
	

	<title>@yield('title')</title>

</head>

<header>

	<table id="tablarriba">
		<tr>
			<td id="deslogeo">
				<input type="button" value="Deslogearse" id="deslogear" >
			</td>

			<td id="Bienvendio">
				<h1>Bienvendio Administrador: </h1>
			</td>
		</tr>
	</table>

	


<nav>
	<div class="menu">
			<ul>
				<li id="mCEscolar"><a href="#">Ciclo escolar completo</a></li>

				<li id="mCEscolarN"><a href="#">Ciclo escolar N</a></li>
				
				<li id="mCEscolarP"><a href="#">Ciclo escolar P</a></li>
				
				<li id="mMespecifico"><a href="#">Mes especifico</a></li>

				
			</ul>
	</div>
</nav>

	<div class="vista">
		<h1>Esta visualisado el Ciclo Escolar 2018-2019 </h1>

	</div>


</header>

<body>

	 @yield('content')

</body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js\calendario\fechado.js"></script>
  <script src="js\calendario\ocultadorAdmin.js"></script>
		

</html>