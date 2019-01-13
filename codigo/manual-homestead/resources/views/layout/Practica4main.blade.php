<!DOCTYPE html>
<html lang="es">
	<head>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css\Practica4.css" rel="stylesheet" type="text/css">
		<link href="css\ejercisio4_1.css" rel="stylesheet" type="text/css">
		<link href="css\ejercisio3_2.css" rel="stylesheet" type="text/css">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="js\ejercisio3_1.js"></script>
		
		<title>@yield('title')</title>

	</head>

	<header>
		<div class="namepage">
			<h1>SonicFan.com</h1>

		</div>
	</header>

	<nav>
		<div class="menu">
			<ul>
				<li><a href="#">Home</a></li>

				<li><a href="#">Juegos</a></li>
				
				<li><a href="practica4">Reseñas</a></li>
				
				<li><a href="#">Noticias</a></li>

				<li><a href="practica4i">Imagenes</a></li>

				<li><a href="#">Trucos</a></li>
				
			</ul>
	</div>
	</nav>



	<body>

		<div class="conteiner1">
			<aside>
				@yield('aside')
			</aside>

			@yield('content')

			
		</div>
		
		

			
		<div class="conteiner2">
				<div class="tabla">
				<table >
					  <tr>
					    <th colspan="2"><h3>Resumen</h3></th>

					  </tr>
					  <tr>
					    <td><h4>Plataforma</h4></td>
					    <td>@yield('plataforma')</td>
					  </tr>
					  <tr>
					    <td><h4> Género</h4></td>
					    <td>@yield('genero')</td>

					  </tr>
					  <tr>
					    <td><h4>Tipo</h4></td>
					    <td>@yield('tipo')</td>
					  </tr>

					  <tr>
					    <td><h4>Año </h4></td>
					    <td>@yield('age')</td>
					  </tr>

					  <tfoot>
						<tr>
							<td><h4> No doc 3 </h4> </td>
							<td>@yield('doc')</td>

						</tr>
							</tfoot>

					</table>
			</div>
			

			<div class="encuesta">
				<form action="practica4e">
	    			<input type="submit" value="Encuesta" id="b" />
				</form>
			</div>
			
		</div>


	
	</body>

</html>