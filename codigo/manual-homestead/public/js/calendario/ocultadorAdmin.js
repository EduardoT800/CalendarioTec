//varibales universales
var primerYear;
var segundoYear;
var mesEncabezado;
var cN = false;


$(document).ready(function()
{
	primerYear=$("#cEscolarN").val();
	segundoYear=parseInt(primerYear);
	segundoYear= segundoYear+1;
	console.log(primerYear)

	//Se obtiene el encabezado del mes
	mesEncabezado = "Agosto " +primerYear;

	//Se oculta lo que no se vera al recargar la pagina
	$('.mesTool').hide();
	


	

	//Al presionar ciclo escolar completo
	$("#mCEscolar").click(function()
	{

		$('.vista h1').text("Esta visualisado el Ciclo Escolar " +primerYear +"-" +segundoYear);




		$('.cEscolarTool').show();
		$('.dia_rango').show();
		$('.coloricnche').show();
		$('.limpieza').show();

		$('.mesTool').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	
	});

	//Al presionar ciclo escolar N
	$("#mCEscolarN").click(function()
	{

		$('.vista h1').text("Esta visualisado el Ciclo Escolar " +primerYear );


		$('.cEscolarTool').show();
		$('.dia_rango').show();
		$('.coloricnche').show();
		$('.limpieza').show();

		$('.mesTool').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	
	});

	//Al presionar ciclo escolar P
	$("#mCEscolarP").click(function()
	{

		$('.vista h1').text("Esta visualisado el Ciclo Escolar "  +segundoYear);

		$('.cEscolarTool').show();
		$('.dia_rango').show();
		$('.coloricnche').show();
		$('.limpieza').show();

		$('.mesTool').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	
	});

	//Al presionar Mes especifico
	$("#mMespecifico").click(function()
	{

		$('.vista h1').text(mesEncabezado);

		$('.cEscolarTool').hide();
		$('.dia_rango').hide();
		$('.coloricnche').hide();
		$('.limpieza').hide();

		$('.mesTool').show();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	
	});


});


function changMes()
{
	var mes =document.getElementById("option").value;

	if (mes != "AgostoP")
	{
		if (mes != "AgostoN") 
		{
			switch(mes)
			{
				case "Septiembre":
					cN= true;
					break;

				case "Octubre":
					cN= true;
					break;

				case "Noviembre":
					cN= true;
					break;

				case "Diciembre":
					cN= true;
					break;
			}

			if (cN) 
			{
				mesEncabezado=mes +" " +primerYear;
				cN= false;
			}
			else
			{
				mesEncabezado=mes +" " +segundoYear;
			}
		}

		else
		{
			mesEncabezado="Agosto " +primerYear;
		}

	}
	else
	{
		mesEncabezado="Agosto " +segundoYear;
		
	}

	$('.vista h1').text(mesEncabezado);


}