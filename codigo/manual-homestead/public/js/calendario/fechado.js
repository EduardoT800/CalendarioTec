//aqui van las variables universales
var fechaN;
var fechaP;
var elNumero;

function promptPeriodDates(date){
  // console.log(date);
  // start = date.substring(0, 4);
  // end = date.substring(6, 10);
  // swal({
  //   title: "Seleccione las fechas correspondientes",
  //   showCancelButton: true,
  //   cancelButtonText: "Cancelar",
  //   html: 
  //   `<form>
  //     <div class="form-group">
  //       <label for="ScycleN">Inicio del ciclo ${date}N:</label>
  //       <input id="ScycleN" type="date">
  //     </div>
  //     <div class="form-group">
  //       <label for="FcycleN">Fin del ciclo ${date}N:</label>
  //       <input id="FcycleN" type="date">
  //     </div>
  //     <div class="form-group">
  //       <label for="ScycleP">Inicio del ciclo ${date}P:</label>
  //       <input id="ScycleP" type="date">
  //     </div>
  //     <div class="form-group">
  //       <label for="EcycleP">Fin del ciclo ${date}P:</label>
  //       <input id="EcycleP" type="date">
  //     </div>
  //   </form>`,
  //   inputValidator: (value) => {
  //     return !value && 'You need to select something';
  //   }
  // })
  // .then(result => {
  //   console.log(result);
  // })
  swal.mixin({
    input: 'hidden',
    html: `<input type="date" onchange="updateHidden(this)">`,
    confirmButtonText: 'Next &rarr;',
    showCancelButton: true,
    progressSteps: ['1', '2', '3', '4']
  }).queue([
    {
      title: `Inicio ${date}N`,
      text: 'Seleccione la fecha'
    },
    {
      title: `Final ${date}N`,
      text: 'Seleccione la fecha'
    },
    {
      title: `Inicio ${date}P`,
      text: 'Seleccione la fecha'
    },
    {
      title: `Final ${date}P`,
      text: 'Seleccione la fecha'
    },
  ]).then((result) => {
    if (result.value) {
      let startN = result.value[0].split('-');
      let endN = result.value[1].split('-');
      let startP = result.value[2].split('-');
      let endP = result.value[3].split('-');
      console.log(startN, endN, startP, endP);
      // swal({
      //   title: 'All done!',
      //   html:
      //     'Your answers: <pre><code>' +
      //       JSON.stringify(result.value) +
      //     '</code></pre>',
      //   confirmButtonText: 'Lovely!'
      // })
    }
  })
  ;
}

function updateHidden(element){
  document.querySelector('.swal2-input').value = element.value;
}
//Aqui se pone la feacha a la pagina

$(document).ready(function()
{
	//Aqui obtenemos el año P


	fechaN = $("#cEscolarN").val();
  console.log($("#cEscolarN"));
  elNumero=parseInt(fechaN.substring(0,4));
	fechaP= elNumero+1;

	//Aqui le ponemos año a la indicacion de vista

	$('.vista h1').text("Esta visualizando el Ciclo Escolar " + fechaN );

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
	document.getElementById("cEscolarN").value=elNumero+`-${elNumero+1}`;

	
}

function menos()
{
	elNumero--;
	document.getElementById("cEscolarN").value =elNumero+`-${elNumero+1}`;
	
}
