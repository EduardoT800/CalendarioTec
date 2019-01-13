//aqui van las variables universales
var fechaN;
var fechaP;
var elNumero;


//Aqui se pone la feacha a la pagina

$(document).ready(function()
{
	//Aqui obtenemos el año P


	fechaN = $("#cEscolarN").val();
	elNumero=parseInt(fechaN);
	fechaP= elNumero+1;

	//Aqui le ponemos año a la indicacion de vista

	$('.vista h1').text("Esta visualisado el Ciclo Escolar " +fechaN +"-" +fechaP);

	//Aqui le ponemos fevha a los separadores

	$('#labelN').text(fechaN);
	$('#labelP').text(fechaP);


	//Aqui le ponemos año a los meses del calendario

	$('#agostof').text('Agoto' + " " +fechaN); 
	$('#septiembre').text('Septiembre' + " " +fechaN); 
	$('#octubre').text('Octubre' + " " +fechaN); 
	$('#noviembre').text('Noviembre' + " " +fechaN);
	$('#diciembre').text('Diciembre' + " " +fechaN);  
	$('#enero').text('Enero' + " " +fechaP); 
	$('#febrero').text('Febrero' + " " +fechaP); 
	$('#marzo').text('Marzo' + " " +fechaP); 
	$('#abril').text('Abril' + " " +fechaP);
	$('#mayo').text('Mayo' + " " +fechaP);  
	$('#junio').text('Junio' + " " +fechaP); 
	$('#julio').text('Julio' + " " +fechaP); 
	$('#agostos').text('Agosto' + " " +fechaP); 

});

function mas()
{
	elNumero++;
	document.getElementById("cEscolarN").value =elNumero;

	
}

function menos()
{
	elNumero--;
	document.getElementById("cEscolarN").value =elNumero;
	
}