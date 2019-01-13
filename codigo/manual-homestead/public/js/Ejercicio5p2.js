$(document).ready(function()
{
	
	$("#boton1").click(function()
	 	{
	        $('#parrafo1').toggle();

	    });

	$("#boton2").click(function()
 	{
        $('#parrafo2').toggle();

    });

    $("#boton3").click(function()
 	{
        $('#parrafo3').toggle();

    });

});

function pintar(colore)
{
    
	document.bgColor = colore;
	document.getElementById("botonp").bgColor = colore;
	document.getElementById("link").bgColor = colore;
}
