<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="css\menupractica2.css" rel="stylesheet" type="text/css">
	<title> @yield('title')</title>
</head>
	 

<header>

	<div class="logo">
		<img src="Imagenes\sonic.png" width="150" heigth="150">
	</div>

	<div class="namepage">
		<h1>Sonic Fanpage.com</h1>

	</div>


	
</header>

<nav>
	<div class="menu">
			<ul>
				<li><a href="#">Home</a></li>

				<li><a href="#">Juegos</a></li>
				
				<li><a href="#">Imágenes</a></li>
				
				<li><a href="#">Información</a></li>

				
				<li><a href="#">Registro</a></li>
				
			</ul>
	</div>
</nav>


<aside>
	<div class="submenu">
			<ul>
				<li><a href="#">Reseñas</a></li>
				<li><a href="#">Gameplays</a></li>
				<li><a href="#">Comprar</a></li>
				<li><a href="#">Trailers</a></li>
				<li><a href="#">Trucos</a></li>
			</ul>		

	</div>
</aside>
<body>
	<div class="contenido">
		
			@yield('content')
		
	</div>
</body>
</html>