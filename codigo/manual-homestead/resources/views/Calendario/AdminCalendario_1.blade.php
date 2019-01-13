@extends('Calendario.layout.Adminmaster') 

@section('title')
Admitrador de calendario Itescam
@endsection

@section('content')

	<div class="contenedor">
		<div class="herramientas">

			<div class ="cEscolarTool">

				<table id="cicloTable">
					

						<tr id="cEscolar">
							<td>Ciclo Escolar N</td>
							<td><input type="text" name="user" id="cEscolarN" value = "2018" readonly="readonly" onpaste="return false" required></td>
							<td><input type="button" value="-" onclick="menos()" id="menos" ></td>
							<td><input type="button" value="+" onclick="mas()" id="mas" ></td>

						</tr>
				</table>

                    <input type="button" value="Aplicar cambio de fecha" onclick="" id="changeDate" >

			</div>

			<div class="dia_rango">

				<form>
					<label>
          				<input type="radio" name="color" value="dia" id="dia" checked="checked"> Dia
       				</label>
       				
       				<label>
          				<input type="radio" name="color" value="rango" id="rango"> Rango
       				 </label>
				</form>

			</div>

					
			<div class="coloricnche">
				<table id="listaTool">
					<form>
						<tr id="lista">
							<td> <input type="radio" name="evento" value="color" id="inicio" checked="checked"> </td>
							<td id="icon_color"> <img src="imagenes\CalendarioIconos\inicio.png"></td>
		     				<td >Inicio y fin de curso.</td>
		     			</tr>
		     			<tr id="lista">
		     				<td> <input type="radio" name="evento" value="color" id="inhabil"> </td>
		     				<td id="icon_color"><img src="imagenes\CalendarioIconos\inhabiles.png"></td>
		     				<td>Inhábiles oficiales.</td>
		     			</tr>
		     			<tr id="lista">
		     				<td> <input type="radio" name="evento" value="color" id="sinActividad"> </td>
		     				<td id="icon_color"><img src="imagenes\CalendarioIconos\sinActividad.png"></td>
		     				<td>Sin actividad académica programada.</td>
		     			</tr>
		     			<tr id="lista">
		     				<td> <input type="radio" name="evento" value="color" id="jornada"> </td>
		     				<td id="icon_color"><img src="imagenes\CalendarioIconos\jornada.png"></td>
		     				<td>Jornada de proyectos.</td>
		     			</tr>
		     			<tr id="lista">
		     				<td> <input type="radio" name="evento" value="color" id="clases_normales"> </td>
		     				<td id="icon_color"><img src="imagenes\CalendarioIconos\clases.png"></td>
		     				<td>Clases normales.</td>
		     			</tr>
		     			<tr id="lista">
		     				<td> <input type="radio" name="evento" value="color" id="examen"> </td>
		     				<td id="icon_color"><img src="imagenes\CalendarioIconos\examen.png"></td>
		     				<td>Exámenes parciales y periodo de titulación.</td>
		     			</tr>
		     			<tr id="lista">
		     				<td> <input type="radio" name="evento" value="color" id="prevaluacion"> </td>
		     				<td id="icon_color"><img src="imagenes\CalendarioIconos\prevaluacion.png"></td>
		     				<td>1ra Revaluación.</td>
		     			</tr>
		     			<tr id="lista">
		     				<td> <input type="radio" name="evento" value="color" id="srevaluacion"> </td>
		     				<td id="icon_color"><img src="imagenes\CalendarioIconos\srevaluacion.png"></td>
		     				<td>2da Revaluación.</td>
		     			</tr>
		     			
		     			<tr id="lista">
		     				<td> <input type="radio" name="evento" value="color" id="ingles"> </td>
		     				<td id="icon_color"><img src="imagenes\CalendarioIconos\ingles.png"></td>
		     				<td>Examen diagnostico de inglés.</td>
		     			</tr>
		     			<tr id="lista">
		     				<td> <input type="radio" name="evento" value="color" id="aniversario"> </td>
		     				<td id="icon_color"><img src="imagenes\CalendarioIconos\aniversario.png"></td>
		     				<td>Aniversario.</td>
		     			</tr>
		     			<tr id="lista">
		     				<td> <input type="radio" name="evento" value="color" id="vacasiones"> </td>
		     				<td id="icon_color"><img src="imagenes\CalendarioIconos\vacasiones.png"></td>
		     				<td>Periodos vacacionales.</td>
		     			</tr>
		     			<tr id="lista">
		     				<td> <input type="radio" name="evento" value="color" id="admision"> </td>
		     				<td id="icon_color"><img src="imagenes\CalendarioIconos\admision.png"></td>
		     				<td>Examen de admisión.</td>
		     			</tr>
		     			<tr id="lista">
		     				<td> <input type="radio" name="evento" value="color" id="limite"> </td>
		     				<td id="icon_color"><img src="imagenes\CalendarioIconos\limite.png"></td>
		     				<td>Limite Preentrega, Doctos,Titul.</td>
		     			</tr>
		     			<tr id="lista">
		     				<td> <input type="radio" name="evento" value="color" id="egresados"> </td>
		     				<td id="icon_color"><img src="imagenes\CalendarioIconos\egresados.png"></td>
		     				<td>Ceremonia de egresados.</td>
		     			</tr>
		     			<tr id="lista">
		     				<td> <input type="radio" name="evento" value="color" id="reinscripcion"> </td>
		     				<td id="icon_color"><img src="imagenes\CalendarioIconos\reinscripcion.png"></td>
		     				<td>Reinscripciones.</td>
		     			</tr>
						

					</form>
						

				</table>
					
					
			</div>

			<div class="mesTool">
				<form>

					
					<select id="option" name="listas">

						<option value="AgostoN"> Agosto N</option>
						<option value="Septiembre">Septiembre</option>
						<option value="Octubre">Octubre</option>
						<option value="Noviembre"> Noviembre</option>
						<option value="Diciembre">Diciembre</option>
						<option value="Enero">Enero</option>
						<option value="Febrero"> Febrero</option>
						<option value="Marzo">Marzo</option>
						<option value="Abril">Abril</option>
						<option value="Mayo">Mayo</option>
						<option value="Junio">Junio</option>
						<option value="Julio">Julio</option>
						<option value="AgostoP"> Agosto P</option>
								
					</select>

					<br>
					<br>

					<input type="button" value="Ir al mes" onclick="changMes()" id="mesCheck" >

				</form>
				<br>

				<table id="mesToolTable">
											
		     			<tr id="lista_mes">
		     				<td id="icon"><img src="imagenes\CalendarioIconos\ceremonia.png"></td>
		     				<td>Ceremonia especial</td>
		     			</tr>

		     			<tr id="lista_mes">
		     				<td id="icon"><img src="imagenes\CalendarioIconos\concurso.png"></td>
		     				<td>Concurso</td>
		     			</tr>

		     			<tr id="lista_mes">
		     				<td id="icon"><img src="imagenes\CalendarioIconos\conferencia.png"></td>
		     				<td>Conferencia</td>
		     			</tr>

		     			<tr id="lista_mes">
		     				<td id="icon"><img src="imagenes\CalendarioIconos\cursos.png"></td>
		     				<td>Cursos</td>
		     			</tr>

		     			<tr id="lista_mes">
		     				<td id="icon"><img src="imagenes\CalendarioIconos\credencial.png"></td>
		     				<td>Entrega de credenciales</td>
		     			</tr>


		     			<tr id="lista_mes">
		     				<td id="icon"><img src="imagenes\CalendarioIconos\estudiantil.png"></td>
		     				<td>Evento estudiantil</td>
		     			</tr>

		     			<tr id="lista_mes">
		     				<td id="icon"><img src="imagenes\CalendarioIconos\cingles.png"></td>
		     				<td>Examen de certificación de ingles</td>
		     			</tr>

		     			<tr id="lista_mes">
		     				<td id="icon"><img src="imagenes\CalendarioIconos\rbecas.png"></td>
		     				<td>Recepción de documentos de becas</td>
		     			</tr>

		     			<tr id="lista_mes">
		     				<td id="icon"><img src="imagenes\CalendarioIconos\ringles.png"></td>
		     				<td>Resultados de ingles</td>
		     			</tr>

		     			

		     			<tr id="lista_mes">
		     				<td id="icon"><img src="imagenes\CalendarioIconos\viaje.png"></td>
		     				<td>Viaje de concurso/ beca/ practica</td>
		     			</tr>


				</table>
				
			</div>

			 <div class="limpieza">

                    <br>

                    <input type="button" value="Limpiar N" onclick="" id="clearN" >
                    <input type="button" value="Limpiar P" onclick="" id="clearP" >
                    <input type="button" value="Limpiar todo" onclick="" id="clear" >
                    
               </div>

			<div class ="salvado">
				<input type="button" value="Cargar" onclick="" id="cargar" >
				<br>
				<br>
				<input type="button" value="Guardar" onclick="" id="guardar" >
				<br>
				<br>
				<input type="button" value="Publicar" onclick="" id="publicar" >



			</div>

              

			

				
			
		</div>

		
		
	</div>






@endsection