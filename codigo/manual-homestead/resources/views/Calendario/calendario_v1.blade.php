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
	     				<td id="icon_color"> <img src="imagenes\CalendarioIconos\inicio.png"></td>
	     				<td >Inicio y fin de curso.</td>
	     			</tr>
	     			<tr id="lista">
	     				<td id="icon_color"><img src="imagenes\CalendarioIconos\inhabiles.png"></td>
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
     			<input type="button" value="2018" onclick="" id="firstyear" >
     		</div>

     		<div class="Fyear">
     			<div class="agosto">
     				<table>
     					<tr>
     						<th id="agostof" colspan="7">Agosto 2018</th>
     					</tr>
     					<tr id="dweek">
     						<td> D </td> 
     						<td>L</td>
     						<td>M</td>
     						<td>M</td>
     						<td>J</td>
     						<td>V</td>
     						<td>S</td>
     					</tr>

     					<tr id="week1">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week2">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week3">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week4">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week5">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     				</table>
     				
     			</div>

     			<div class="septiembre">
     				<table>
     					<tr>
     						<th id="septiembre" colspan="7">Septiembre 2018</th>
     					</tr>
     					<tr id="dweek">
     						<td> D </td> 
     						<td>L</td>
     						<td>M</td>
     						<td>M</td>
     						<td>J</td>
     						<td>V</td>
     						<td>S</td>
     					</tr>

     					<tr id="week1">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week2">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week3">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week4">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week5">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     				</table>
     				
     			</div>

     			<div class="octubre">
     				<table>
     					<tr>
     						<th id="octubre" colspan="7">Octubre 2018</th>
     					</tr>
     					<tr id="dweek">
     						<td> D </td> 
     						<td>L</td>
     						<td>M</td>
     						<td>M</td>
     						<td>J</td>
     						<td>V</td>
     						<td>S</td>
     					</tr>

     					<tr id="week1">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week2">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week3">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week4">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week5">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     				</table>
     				
     			</div>

     			<div class="noviembre">
     				<table>
     					<tr>
     						<th id="noviembre" colspan="7">Noviembre 2018</th>
     					</tr>
     					<tr id="dweek">
     						<td> D </td> 
     						<td>L</td>
     						<td>M</td>
     						<td>M</td>
     						<td>J</td>
     						<td>V</td>
     						<td>S</td>
     					</tr>

     					<tr id="week1">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week2">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week3">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week4">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week5">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     				</table>
     				
     			</div>

     			<div class="diciembre">
     				<table>
     					<tr>
     						<th id="diciembre" colspan="7">Diciembre 2018</th>
     					</tr>
     					<tr id="dweek">
     						<td> D </td> 
     						<td>L</td>
     						<td>M</td>
     						<td>M</td>
     						<td>J</td>
     						<td>V</td>
     						<td>S</td>
     					</tr>

     					<tr id="week1">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week2">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week3">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week4">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week5">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     				</table>
     				
     			</div>

     		</div>

     		<div class="Sboton">
     			<input type="button" value="2019" onclick="" id="secondyear" >
     		</div>

     		<div class="Syear">
     			<div class="enero">
     				<table>
     					<tr>
     						<th id="enero" colspan="7">Enero 2019</th>
     					</tr>
     					<tr id="dweek">
     						<td> D </td> 
     						<td>L</td>
     						<td>M</td>
     						<td>M</td>
     						<td>J</td>
     						<td>V</td>
     						<td>S</td>
     					</tr>

     					<tr id="week1">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week2">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week3">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week4">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week5">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     				</table>
     				
     			</div>

     			<div class="febrero">
     				<table>
     					<tr>
     						<th id="febrero" colspan="7">Febrero 2019</th>
     					</tr>
     					<tr id="dweek">
     						<td> D </td> 
     						<td>L</td>
     						<td>M</td>
     						<td>M</td>
     						<td>J</td>
     						<td>V</td>
     						<td>S</td>
     					</tr>

     					<tr id="week1">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week2">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week3">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week4">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week5">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     				</table>
     				
     			</div>
     			

     			<div class="marzo">
     				<table>
     					<tr>
     						<th id="marzo" colspan="7">Marzo 2019</th>
     					</tr>
     					<tr id="dweek">
     						<td> D </td> 
     						<td>L</td>
     						<td>M</td>
     						<td>M</td>
     						<td>J</td>
     						<td>V</td>
     						<td>S</td>
     					</tr>

     					<tr id="week1">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week2">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week3">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week4">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week5">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     				</table>
     				
     			</div>

     			<div class="abril">
     				<table>
     					<tr>
     						<th id="abril" colspan="7">Abril 2019</th>
     					</tr>
     					<tr id="dweek">
     						<td> D </td> 
     						<td>L</td>
     						<td>M</td>
     						<td>M</td>
     						<td>J</td>
     						<td>V</td>
     						<td>S</td>
     					</tr>

     					<tr id="week1">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week2">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week3">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week4">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week5">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     				</table>
     				
     			</div>

     			<div class="mayo">
     				<table>
     					<tr>
     						<th id="mayo" colspan="7">Mayo 2019</th>
     					</tr>
     					<tr id="dweek">
     						<td> D </td> 
     						<td>L</td>
     						<td>M</td>
     						<td>M</td>
     						<td>J</td>
     						<td>V</td>
     						<td>S</td>
     					</tr>

     					<tr id="week1">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week2">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week3">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week4">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week5">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     				</table>
     				
     			</div>

     			<div class="junio">
     				<table>
     					<tr>
     						<th id="junio" colspan="7">Junio 2019</th>
     					</tr>
     					<tr id="dweek">
     						<td> D </td> 
     						<td>L</td>
     						<td>M</td>
     						<td>M</td>
     						<td>J</td>
     						<td>V</td>
     						<td>S</td>
     					</tr>

     					<tr id="week1">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week2">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week3">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week4">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week5">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     				</table>
     				
     			</div>

     			<div class="julio">
     				<table>
     					<tr>
     						<th id="julio" colspan="7">Julio 2019</th>
     					</tr>
     					<tr id="dweek">
     						<td> D </td> 
     						<td>L</td>
     						<td>M</td>
     						<td>M</td>
     						<td>J</td>
     						<td>V</td>
     						<td>S</td>
     					</tr>

     					<tr id="week1">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week2">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week3">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week4">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week5">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     				</table>
     				
     			</div>

     			<div class="agostos">
     				<table>
     					<tr>
     						<th id="agostos" colspan="7">Agosto 2019</th>
     					</tr>
     					<tr id="dweek">
     						<td> D </td> 
     						<td>L</td>
     						<td>M</td>
     						<td>M</td>
     						<td>J</td>
     						<td>V</td>
     						<td>S</td>
     					</tr>

     					<tr id="week1">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week2">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week3">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week4">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week5">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     				</table>
     				
     			</div>




     		</div>

     		<div class="mes_grande">
     			<table>
     					<tr>
     						<th id="gran_mes" colspan="7"> <P> Agosto 2018 </P> </th>
     					</tr>
     					<tr id="dweek">
     						<td> D </td> 
     						<td>L</td>
     						<td>M</td>
     						<td>M</td>
     						<td>J</td>
     						<td>V</td>
     						<td>S</td>
     					</tr>

     					<tr id="week1">
     						<td>  </td> 
     						<td> <a href="https://www.itescam.edu.mx/portal/avisos.php?id=1610"><img src="imagenes\CalendarioIconos\credencial_big.png" id="Eventoone"></a><br>Acces Card Bel</td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week2">
     						<td>  </td> 
     						<td></td>
     						<td><img src="imagenes\CalendarioIconos\cursos_gold.png" id="Eventoplus"><br> Adminitración de servidores...</td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week3">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week4">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     					<tr id="week5">
     						<td>  </td> 
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     						<td></td>
     					</tr>

     				</table>
     			
     		</div>

     		

     	</div>
     	
     </div>

@endsection