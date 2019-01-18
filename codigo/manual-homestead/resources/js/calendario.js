const ITESCAM = require("../ts/calendar");
const iDate = ITESCAM.MDate;
const Calendar = ITESCAM.Calendar;
let startDate = new iDate(1,8,2018);
let endDate = new iDate(31,8,2019);
let calendar = new Calendar(startDate, endDate);
calendar.generateCycles(new iDate(21,1,2019), new iDate(19,2,2019));
window.calendar = calendar;
window.Calendar = Calendar;
var HTMLCalendar = document.querySelector('div.calendar');
HTMLCalendar.querySelector('.Fboton').innerHTML = `<button type="button" data-year=${calendar.period.years[0].value} id="firstyear">${calendar.period.years[0].value}</button>`;
HTMLCalendar.querySelector('.Sboton').innerHTML = `<button type="button" data-year=${calendar.period.years[1].value} id="secondyear">${calendar.period.years[1].value}</button>`;
HTMLCalendar.querySelector('.Fyear').innerHTML = calendar.getAllMonthsHTML(calendar.period.years[0].months);
HTMLCalendar.querySelector('.Syear').innerHTML = calendar.getAllMonthsHTML(calendar.period.years[1].months);
document.querySelector(".tituloC h1").innerHTML = `Calendario Oficial Ciclo Escolar ${startDate.year.value}-${endDate.year.value}`;

