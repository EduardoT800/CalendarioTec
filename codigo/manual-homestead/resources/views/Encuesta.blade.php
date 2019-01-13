@extends('layout.Practica4main')



@section('title')
Practica 4-Encuesta
@endsection


@section('content')

	<div class="texto">
		
		
		<div class="formulario">
			<form action="enviar.php" method="post" id="formu">
				<h2 id="enc">Encuesta</h2>
				<input type="text" name="Nombre" placeholder="Nombre" required>
				<input type="text" name="Pais" placeholder="Pais" required>
				<input type="text" name="Estado" placeholder="Estado" required>
				<input type="text" name="Ciudad" placeholder="Ciudad" required>
				<textarea name="Velocidad" placeholder="Escriba aqui lo que opina de la Velocidad de la pagina" required></textarea>
				<textarea name="Disenio" placeholder="Escriba aqui lo que opina del diseño de la pagina" required></textarea>
				<input type="button" value="Enviar" id="boton" >
			</form>
		</div>
		
	</div>

	

@endsection



@section('plataforma')
Sega Saturn
@endsection

@section('genero')
Carreras
@endsection

@section('tipo')
Spin Off (Canon)
@endsection

@section('age')
1997
@endsection

@section('doc')
3/3
@endsection