function numb(e)
{
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8)
    {
        return true;
    }



    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
    
}

function pitagoras()
{
	var fila = $('#fila').val();
	
	var columna = $('#columna').val();

	var conversion;

	var pitH=0;
	var pitV=0;

	if (fila>100 ) 
	{
		fila=100;
	}

	if (fila<1) 
	{
		fila=1;
	}

	if (columna>100 ) 
	{
		columna=100;
	}

	if (columna<1) 
	{
		columna=1;
	}

	conversion=parseInt(fila);
	conversion++;
	fila= conversion;

	conversion=parseInt(columna);
	conversion++;
	columna= conversion;


	var Tabla="";

	Tabla+="<table class= 'table table-bordered'>";

		for (var i = 0; i < fila; i++) 
		{
			Tabla+="<tr>";


				for (var j = 0; j < columna; j++) 
				{
					Tabla+="<td>";

					if (j==0) 
					{
						Tabla+=pitH+i;
					}


					if (i==0) 
					{
						Tabla+=pitH+j;
					}

					if (i!=0 & j!=0) 
					{
						Tabla+=i*j;
					}

					
					Tabla+="</td>";


				}



			Tabla+="</tr>"
		}

	Tabla+="</table>";

	$("#tabla").html(Tabla);

}


function IMC()
{
	var peso = $('#peso').val();	
	var altura = $('#estatura').val();
	var resultado;
	var texto;

	altura= Math.pow(altura, 2);

	resultado= peso/altura;
	resultado=resultado*10000;

	if (resultado<18) 
	{
		texto=resultado + " Desnutrido Debes comer mas";
	}
	else
	{
		if (resultado>18 && resultado<25) 
		{
			texto=resultado + " Normal, muy bien sigue asi";
		}
		else
		{
			if (resultado>25 && resultado<28 ) 
			{
				texto=resultado + " Sobrepeso, Necesitas ejercitarte un poco";
			}
			else
			{
				texto=resultado + " Obesidad, cuidado con tu peso por tu salud es recomendable...";
			}
		}
	}


	$("#resultado").val(texto);

}

function vote()
{
	var pri = $('#pri').val();
	var pan = $('#pan').val();	
	var more = $('#mo').val();	
	var na = $('#na').val();	

	if (pri>pan) 
	{
		if (pri>more) 
		{
			if (pri>na) 
			{
				$('#pr').show();
				$('#pa').hide();
				$('#amlo').hide();
				$('#yuagui').hide();
			}
			else
			{
				$('#pr').hide();
				$('#pa').hide();
				$('#amlo').hide();
				$('#yuagui').show()
			}
		}
		else
		{
			if (more>na) 
			{
				$('#pr').hide();
				$('#pa').hide();
				$('#amlo').show();
				$('#yuagui').hide()
			}
			else
			{
				$('#pr').hide();
				$('#pa').hide();
				$('#amlo').hide();
				$('#yuagui').show()
			}
		}
	}
	else
	{
		if (pan>more) 
		{
			if (pan>na) 
			{
				$('#pr').hide();
				$('#pa').show();
				$('#amlo').hide();
				$('#yuagui').hide()
			}
			else
			{
				$('#pr').hide();
				$('#pa').hide();
				$('#amlo').hide();
				$('#yuagui').show()
			
			}
		}
		else
		{
			if (more>na) 
			{
				$('#pr').hide();
				$('#pa').hide();
				$('#amlo').show();
				$('#yuagui').hide()
			}
			else
			{
				$('#pr').hide();
				$('#pa').hide();
				$('#amlo').hide();
				$('#yuagui').show()
			
			}
		}
	}	
}