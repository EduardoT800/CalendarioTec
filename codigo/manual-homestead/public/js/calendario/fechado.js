/**
 * @typedef { import("../../../resources/ts/calendar") } ITESCAM
 * @typedef { import("../../../resources/ts/calendar").Calendar } Calendar
 * @typedef { import("../../../resources/ts/calendar").MDate } iDate
 */
//aqui van las variables universales
var fechaN;
var fechaP;
var elNumero;
/** @type { Calendar }  */
let calendar = Calendar.prototype;
/**@type { iDate } */
let iDate = ITESCAM.MDate.prototype.constructor;
/** @type { Calendar }  */
let createdCalendar;
let inputCrear = document.querySelector('#changeDate');
let inputView = document.querySelector('#view');
let periodsArray;
// let saveBtn = document.querySelector('#guardar');
function savePeriod(){
  if(typeof createdCalendar !== "undefined"){
    let text = JSON.stringify(createdCalendar);
    // console.log(text);
    fetch('/periods',{
      method: 'POST',
      body: text,
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    }).then(res => res.json())
    .then(res => {
      console.log(res);
      swal({
        title: `Guardado correctamente`,
        type: `success`,
        confirmButtonText: 'Aceptar',
        timer: 1500
      });
      getAllPeriods();
    })
    .catch(err => console.log(err));
  } else {
    console.error("Está indefinido");
  }
}

function getAllPeriods(){
  fetch('/periods',{
    method: 'GET'
  }).then(res => res.json())
  .then(res => {
    console.log(res);
    periodsArray = res;
    checkCurrentPeriod();
  })
  .catch(err => console.log(err));
}

function checkCurrentPeriod(){
  if(periodsArray != undefined){
    let yearSelector = document.querySelector('#cEscolarN');
    let yearText = (yearSelector.value).split("-").join("");
    let isInArray = false;
    for (const period of periodsArray) {
      if(period.name === yearText){
        isInArray = true;
        break;
      }
    }
    if(isInArray){
      inputCrear.value = "Modificar";
      inputView.disabled = false;
    } else {
      inputCrear.value = "Crear";
      inputView.disabled = true;
    }
  }
}

function getPeriod(name){
  let periodName = name.split("-").join("");
  console.log(getPeriodFromArray(periodName));
  let period = JSON.parse(getPeriodFromArray(periodName));
  createdCalendar = new calendar.constructor();
  createdCalendar.setPeriod(period);
  drawCalendar();
}

function getPeriodFromArray(name){
  let response;
  for (const period of periodsArray) {
    if(period.name === name){
      response = period.jsonText;
      break;
    }
  }
  return response;
}

function promptPeriodDates(date){
  swal.mixin({
    input: 'none',
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
      let startN = toNumberArray(result.value[0].split('-'));
      let endN = toNumberArray(result.value[1].split('-'));
      let startP = toNumberArray(result.value[2].split('-'));
      let endP = toNumberArray(result.value[3].split('-'));
      console.log(startN, endN, startP, endP);
      // All the splits leaves us an array of ['yyyy', 'mm', 'dd'] => [0, 1, 2] as indexes;
      startN = new iDate(startN[2], startN[1], startN[0]);
      endN = new iDate(endN[2], endN[1], endN[0]);
      startP = new iDate(startP[2], startP[1], startP[0]);
      endP = new iDate(endP[2], endP[1], endP[0]);
      let errors = 0; let errorMessages = [];
      //Ciclo N
      let response = calendar.compareDates(startN, endN);
      let correct = false;
      if(response === -1)
        correct = true;
      let warnText = 'Finalizado!';
      if(!correct){
        errors++;
        switch(response){
          case 0: warnText = "Las fechas de inicio/fin del son iguales! (inicio ciclo N == fin ciclo N)"; break;
          case 1: warnText = "La fecha final [N] es menor que la de inicio [N] (final ciclo P < inicio ciclo P)"; break;
        }
        errorMessages.push(warnText);
      }
      // Interciclo fin ciclo N e inicio ciclo P
      response = calendar.compareDates(endN, startP);
      correct = false;
      if(response === -1)
        correct = true;
      if(!correct){
        errors++;
        switch(response){
          case 0: warnText = "Las fechas de inicio/fin del son iguales! (fin ciclo N == inicio ciclo P)"; break;
          case 1: warnText = "La fecha de inicio [P] es menor que la final [N] (inicio ciclo P < final ciclo N)"; break;
        }
        errorMessages.push(warnText);
      }
      // Ciclo P
      response = calendar.compareDates(startP, endP);
      correct = false;
      if(response === -1)
        correct = true;
      if(!correct){
        errors++;
        switch(response){
          case 0: warnText = "Las fechas de inicio/fin del son iguales! (inicio ciclo P == fin ciclo P)"; break;
          case 1: warnText = "La fecha final [P] es menor que la de inicio [P] (final ciclo P < inicio ciclo P)"; break;
        }
        errorMessages.push(warnText);
      }
      correct = errors > 0 ? false : true;
      swal({
        title: `${ correct ? "Correcto":"Incorrecto" }`,
        type: `${ correct ? "success": "error" }`,
        html:
          `<div style="font-size: ${correct ? 'inherit' : 'small' }; font-family: 'Open Sans'">`+
             `${ correct ? '<p>Finalizado!</p>': printErrors(errorMessages) }` +'</div>',
        confirmButtonText: 'Aceptar'
      });
      if(correct){
        createdCalendar = new calendar.constructor(startN, endP);
        createdCalendar.generateCycles(endN, startP);
        console.log(createdCalendar);
        drawCalendar();
      }
    }
  })
  ;
}
/**
 * Returns a string array parsed to a number array
 * @param {string[]} array
 * @returns {number[]} response
 */
function toNumberArray(array){
  /** @type {number[]} */
  let response = [];
  for (const element of array) {
    response.push(parseInt(element));
  }
  return response;
}

/**
 * @param {string[]} errors
 * @returns {string} text
 */
function printErrors(errors){
  let text = `<h3>Errores:</h3>`;
  text += '<ol>';
  for (const error of errors) {
    text += `<li>${error}</li>`;
  }
  text += '</ol>';
  return text;
}

function updateHidden(element){
  document.querySelector('.swal2-input').value = element.value;
}

function drawCalendar(){
  var HTMLCalendar = document.querySelector('div.calendario');
  HTMLCalendar.querySelector('.Fboton').innerHTML = `<button type="button" data-year=${createdCalendar.period.years[0].value} id="firstyear">${createdCalendar.period.years[0].value}</button>`;
  HTMLCalendar.querySelector('.Sboton').innerHTML = `<button type="button" data-year=${createdCalendar.period.years[1].value} id="secondyear">${createdCalendar.period.years[1].value}</button>`;
  HTMLCalendar.querySelector('.Fyear').innerHTML = createdCalendar.getAllMonthsHTML(createdCalendar.period.years[0].months);
  HTMLCalendar.querySelector('.Syear').innerHTML = createdCalendar.getAllMonthsHTML(createdCalendar.period.years[1].months);  
}
//Aqui se pone la feacha a la pagina

$(document).ready(function()
{
	//Aqui obtenemos el año P


	fechaN = $("#cEscolarN").val();
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
	checkCurrentPeriod();
}

function menos()
{
	elNumero--;
	document.getElementById("cEscolarN").value =elNumero+`-${elNumero+1}`;
	checkCurrentPeriod();
}
