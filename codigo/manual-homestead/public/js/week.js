

var semana = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];

function generar()
{
	var section = document.getElementById('tabla');
	var tabla = document.createElement('table');
	var fila =document.createElement('tr');

	for (var i = 0; i < 7; i++) 
	{
		var celda = document.createElement('td');
		var texto = document.createTextNode(semana[i]);
		celda.appendChild(texto);
		fila.appendChild(celda);
	}

	tabla.appendChild(fila);
	section.appendChild(tabla);

}