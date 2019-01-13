
var arreglo = [true, 5, false, "hola", "adios", 2];

function nodo()
{
	var parrafo = document.createElement("p");
	var contenido = document.createTextNode("¿Que es mejor? ¿terminar como amigos? ¿O ser como enemigos, esperando atacar?");
	
	parrafo.appendChild(contenido);
	document.body.appendChild(parrafo);
}

function caracter()
{

	

	var cont1=0;
	var cont2=0;

	for (var i = 0; i < arreglo[3].length; i++) 
	{
		cont1++;
	}

	for (var i = 0; i <  arreglo[4].length; i++) 
	{
		cont2++;
	}

	if (cont1>cont2) 
	{
		
		document.getElementById("grande").value = arreglo[3];
	}
	else
	{
		document.getElementById("grande").value = arreglo[4];
	}
	
}

function verdad()
{
	var verdadero = arreglo[0];
	var number = document.getElementById("numero").value ;

	if (number < 3) 
	{
		verdadero = arreglo[2];
	}

	console.log(number);
	console.log(verdadero);

	if (verdadero == true) 
	{
		document.getElementById("realidad").value = "Es Verdadero";
	}
	else
	{
		document.getElementById("realidad").value = "Es Falso";
	}

	verdadero = arreglo[0];

}

function aritmetica()
{
	document.getElementById("suma").value = arreglo[1]+arreglo[5];
	document.getElementById("resta").value = arreglo[1]-arreglo[5];
	document.getElementById("mul").value = arreglo[1]*arreglo[5];
	document.getElementById("divi").value = arreglo[1]/arreglo[5];

}

function factorial() 
{
    var dato =document.getElementById("facinput").value;
    var resultado = dato;

    for (var i = 1; i < dato; i++) 
    {
    	resultado=resultado*i;
    }

    document.getElementById("resfac").value = resultado;

	if (resultado%2==0)
	{
	     document.getElementById("par").value = "Es par";
	}
	else
	{
	     document.getElementById("par").value = "Es inpar";
	}

}

function esPar()
{
	var par = document.getElementById("parInput").value; 

	if (par%2==0)
	{
	     document.getElementById("par1").value = "Es par";
	}
	else
	{
	     document.getElementById("par1").value = "Es inpar";
	}
}

function info()
{
	var oracion = document.getElementById("infoInpur").value; 
	var resultado = "La cadena\""+oracion+"\"";

	if (oracion===oracion.toUpperCase()) 
	{
		resultado="MAYUSCULAS";
	}
	else if (oracion===oracion.toLowerCase()) 
	{
		resultado="minusculas";
	}
	else
	{
		resultado="Mayusculas y Minusculas";
	}

	document.getElementById("infOut").value=resultado;
}

function esPalindromo()
{
	var revString="";
	var cadena= document.getElementById("palidromo").value;
	var longitud = cadena.length;
	
	for (var i = longitud; i>=0; i--) 
		{
			revString=revString+cadena.charAt(i);
		}
	
	if (revString===cadena) 
	{
		document.getElementById("palindrin").value ="Si es";
	}
	else
	{
		document.getElementById("palindrin").value ="No es";
	}


	
}

function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }