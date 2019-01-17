@extends('Calendario.layout.master')

@section('title')
Calendario Itescam
@endsection


@section('content')

 	<div class="tituloC">
     	<h1>Calendario Oficial Ciclo Escolar 2018-2019</h1>

     </div>

     <div class="contenedorC">
     	<div class="menuC">
     		<table id="pictograma">

     			<div class="lista_CEscolar">

     			</div>
	     			<tr id="lista">
	     				<td id="icon_color">
                <!-- <img src="imagenes\CalendarioIconos\inicio.png"> -->
                <canvas id=icon_color width="26px" height="26px" style="border:3px solid #000000; background: #349b66;"></canvas>
               </td>
	     				<td >Inicio y fin de curso.</td>
	     			</tr>
	     			<tr id="lista">
	     				<td id="icon_color">
               <!-- <img src="imagenes\CalendarioIconos\inhabiles.png"> -->
               <canvas id=icon_color width="26px" height="26px" style="border:3px solid #000000; background: #fe0101;"></canvas>
              </td>
	     				<td>Inhábiles oficiales.</td>
	     			</tr>
	     			<tr id="lista">
	     				<td id="icon_color"><img src="imagenes\CalendarioIconos\sinActividad.png"></td>
	     				<td>Sin actividad académica programada.</td>
	     			</tr>
	     			<tr id="lista">
	     				<td id="icon_color"><img src="imagenes\CalendarioIconos\jornada.png"></td>
	     				<td>Jornada de proyectos.</td>
	     			</tr>
	     			<tr id="lista">
	     				<td id="icon_color"><img src="imagenes\CalendarioIconos\clases.png"></td>
	     				<td>Clases normales.</td>
	     			</tr>
	     			<tr id="lista">
	     				<td id="icon_color"><img src="imagenes\CalendarioIconos\examen.png"></td>
	     				<td>Exámenes parciales y periodo de titulación.</td>
	     			</tr>
	     			<tr id="lista">
	     				<td id="icon_color"><img src="imagenes\CalendarioIconos\prevaluacion.png"></td>
	     				<td>1ra Revaluación.</td>
	     			</tr>
	     			<tr id="lista">
	     				<td id="icon_color"><img src="imagenes\CalendarioIconos\srevaluacion.png"></td>
	     				<td>2da Revaluación.</td>
	     			</tr>

	     			<tr id="lista">
	     				<td id="icon_color"><img src="imagenes\CalendarioIconos\ingles.png"></td>
	     				<td>Examen diagnostico de inglés.</td>
	     			</tr>
	     			<tr id="lista">
	     				<td id="icon_color"><img src="imagenes\CalendarioIconos\aniversario.png"></td>
	     				<td>Aniversario.</td>
	     			</tr>
	     			<tr id="lista">
	     				<td id="icon_color"><img src="imagenes\CalendarioIconos\vacasiones.png"></td>
	     				<td>Periodos vacacionales.</td>
	     			</tr>
	     			<tr id="lista">
	     				<td id="icon_color"><img src="imagenes\CalendarioIconos\admision.png"></td>
	     				<td>Examen de admisión.</td>
	     			</tr>
	     			<tr id="lista">
	     				<td id="icon_color"><img src="imagenes\CalendarioIconos\limite.png"></td>
	     				<td>Limite Preentrega, Doctos,Titul.</td>
	     			</tr>
	     			<tr id="lista">
	     				<td id="icon_color"><img src="imagenes\CalendarioIconos\egresados.png"></td>
	     				<td>Ceremonia de egresados.</td>
	     			</tr>
	     			<tr id="lista">
	     				<td id="icon_color"><img src="imagenes\CalendarioIconos\reinscripcion.png"></td>
	     				<td>Reinscripciones.</td>
	     			</tr>

     			<tr id="lista_mes">
     				<th colspan="2" id="generalmes">General</th>

     			</tr>

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

     			<tr id="micalendario">
     				<th colspan="2" id="generalmes">Mi calendario</th>

     			</tr>

     			<tr id="micalendario">
     				<td id="icon"><img src="imagenes\CalendarioIconos\computo.png"></td>
     				<td>Clase en la sala de computo</td>
     			</tr>

     			<tr id="micalendario">
     				<td id="icon"><img src="imagenes\CalendarioIconos\laboratorio.png"></td>
     				<td>Clase en el laboratorio</td>
     			</tr>

     			<tr id="micalendario">
     				<td id="icon"><img src="imagenes\CalendarioIconos\maquinas.png"></td>
     				<td>Clase en sala de máquinas pesadas</td>
     			</tr>

     			<tr id="micalendario">
     				<td id="icon"><img src="imagenes\CalendarioIconos\proyectos.png"></td>
     				<td>Entrega de proyectos</td>
     			</tr>

     			<tr id="micalendario">
     				<td id="icon"><img src="imagenes\CalendarioIconos\eingles.png"></td>
     				<td>Examen de ingles</td>
     			</tr>

     			<tr id="micalendario">
     				<td id="icon"><img src="imagenes\CalendarioIconos\primera.png"></td>
     				<td>Examen de 1ra revaluación</td>
     			</tr>

     			<tr id="micalendario">
     				<td id="icon"><img src="imagenes\CalendarioIconos\segunda.png"></td>
     				<td>Examen de 2da revaluación</td>
     			</tr>

     			<tr id="micalendario">
     				<td id="icon"><img src="imagenes\CalendarioIconos\beca.png"></td>
     				<td>Pago de becas</td>
     			</tr>



     		</table>
     	</div>

     	<div class="calendar">
     		<div class="Fboton">
     			<!-- <input type="button" value="2018" onclick="" id="firstyear" > -->
     		</div>

     		<div class="Fyear">

         </div>

     		<div class="Sboton">
     			<!-- <input type="button" value="2019" onclick="" id="secondyear" > -->
     		</div>

     		<div class="Syear">

         </div>

     		<div class="mes_grande">

         </div>

     	</div>

     </div>
@endsection

@section('Scripts')
  <script src="{{ asset('js/calendario.js') }}"></script>
  <script>
    function toggleView(element){
      // console.log("Hice esto LMAO");
      element.id = "gran_mes";
      let mesGrande = document.querySelector('.mes_grande');
      mesGrande.innerHTML = element.parentNode.innerHTML;
      mesGrande.querySelector('table').onclick = undefined;
      mesGrande.querySelector('table th[colspan]').onclick = function(){
        $('#lista_mes th').hide();
        $('#lista_mes td').hide();
        $('#lista th').show();
        $('#lista td').show();
        $('.Fyear').show();
        $('.Fboton').show();
        $('.Syear').show();
        $('.Sboton').show();
        $('.mes_grande').hide();
      };
      encabezado = capitalize(element.dataset.month);
      $('#gran_mes th').text(encabezado);
      $('#lista_mes th').show();
      $('#lista_mes td').show();
      $('#lista th').hide();
      $('#lista td').hide();
      $('.Fyear').hide();
      $('.Fboton').hide();
      $('.Syear').hide();
      $('.Sboton').hide();
      $('.mes_grande').show();
    }
    function capitalize(word) {
      return word[0].toUpperCase() + word.slice(1);
    }
  </script>
@endsection
