var texto;
var cantidad;
var elNumero;

$(document).ready(function()
{

	texto=$("#cant0").val();
	cantidad=parseInt(texto);

	if (cantidad<2) 
	{
		$('#cant0').css({ 'color': 'red'});
	}

	
	texto=$("#cant1").val();
	cantidad=parseInt(texto);

	if (cantidad<2) 
	{
		$('#cant1').css({ 'color': 'red'});
	}

	texto=$("#cant2").val();
	cantidad=parseInt(texto);

	if (cantidad<2) 
	{
		$('#cant2').css({ 'color': 'red'});
	}

	texto=$("#cant3").val();
	cantidad=parseInt(texto);

	if (cantidad<2) 
	{
		$('#cant3').css({ 'color': 'red'});
	}

});

///7cant0

function mas0()
{
	texto=$("#cant0").val();
	elNumero=parseInt(texto);
	elNumero++;
	document.getElementById("cant0").value =elNumero;
	if (elNumero<2) 
	{
		$('#cant0').css({ 'color': 'red'});
	}
	else
	{
		$('#cant0').css({ 'color': 'black'});

	}

	
}

function menos0()
{
	texto=$("#cant0").val();
	elNumero=parseInt(texto);
	elNumero--;
	document.getElementById("cant0").value =elNumero;
	if (elNumero<2) 
	{
		$('#cant0').css({ 'color': 'red'});
	}
	else
	{
		$('#cant0').css({ 'color': 'black'});
	}

	if (elNumero<0) 
	{
		$("#cant0").val("0");
	}
	
}

///7cant1

function mas1()
{
	texto=$("#cant1").val();
	elNumero=parseInt(texto);
	elNumero++;
	document.getElementById("cant1").value =elNumero;
	if (elNumero<2) 
	{
		$('#cant1').css({ 'color': 'red'});
	}
	else
	{
		$('#cant1').css({ 'color': 'black'});
		
	}

	
}

function menos1()
{
	texto=$("#cant1").val();
	elNumero=parseInt(texto);
	elNumero--;
	document.getElementById("cant1").value =elNumero;
	if (elNumero<2) 
	{
		$('#cant1').css({ 'color': 'red'});
	}
	else
	{
		$('#cant1').css({ 'color': 'black'});
	}

	if (elNumero<0) 
	{
		$("#cant1").val("0");
		alert("No se puede restar valor a 0");
	}
	
}



///7cant2

function mas2()
{
	texto=$("#cant2").val();
	elNumero=parseInt(texto);
	elNumero++;
	document.getElementById("cant2").value =elNumero;
	if (elNumero<2) 
	{
		$('#cant2').css({ 'color': 'red'});
	}
	else
	{
		$('#cant2').css({ 'color': 'black'});
		
	}

	
}

function menos2()
{
	texto=$("#cant2").val();
	elNumero=parseInt(texto);
	elNumero--;
	document.getElementById("cant2").value =elNumero;
	if (elNumero<2) 
	{
		$('#cant2').css({ 'color': 'red'});
	}
	else
	{
		$('#cant1').css({ 'color': 'black'});
	}

	if (elNumero<0) 
	{
		$("#cant2").val("0");
		alert("No se puede restar valor a 0");
	}
	
}



///7cant3

function mas3()
{
	texto=$("#cant3").val();
	elNumero=parseInt(texto);
	elNumero++;
	document.getElementById("cant3").value =elNumero;
	if (elNumero<2) 
	{
		$('#cant3').css({ 'color': 'red'});
	}
	else
	{
		$('#cant3').css({ 'color': 'black'});
	}

	
}

function menos3()
{
	texto=$("#cant3").val();
	elNumero=parseInt(texto);
	elNumero--;
	document.getElementById("cant3").value =elNumero;
	if (elNumero<2) 
	{
		$('#cant3').css({ 'color': 'red'});
	}
	else
	{
		$('#cant3').css({ 'color': 'black'});
	}

	if (elNumero<0) 
	{
		$("#cant3").val("0");
		alert("No se puede restar valor a 0");
	}
	
}

function recalcular()
{
	var tp=0;

	texto=$("#cant0").val();
	elNumero=parseInt(texto);
	tp=elNumero;

	texto=$("#cant1").val();
	elNumero=parseInt(texto);
	tp=tp+elNumero;

	texto=$("#cant2").val();
	elNumero=parseInt(texto);
	tp=tp+elNumero;

	texto=$("#cant3").val();
	elNumero=parseInt(texto);
	tp=tp+elNumero;

	$("#totalP").val(tp);

	texto=$("#cant0").val();
	$("#tgraf").val(texto);

	texto=$("#cant1").val();
	$("#tmonf").val(texto);

	texto=$("#cant2").val();
	elNumero=parseInt(texto);
	tp=elNumero;

	texto=$("#cant3").val();
	elNumero=parseInt(texto);
	tp=tp+elNumero;

	$("#tra").val(tp);


	
}

function red()
{
	texto=$("#cant0").val();
	cantidad=parseInt(texto);

	$('#ta0').show();
	$('#ta1').show();
	$('#ta2').show();
	$('#ta3').show();

	if (cantidad>1) 
	{
		$('#ta0').hide();
	}


	
	texto=$("#cant1").val();
	cantidad=parseInt(texto);

	if (cantidad>1) 
	{
		$('#ta1').hide();
	}

	texto=$("#cant2").val();
	cantidad=parseInt(texto);

	if (cantidad>1) 
	{
		$('#ta2').hide();
	}

	texto=$("#cant3").val();
	cantidad=parseInt(texto);

	if (cantidad>1) 
	{
		$('#ta3').hide();
	}
}

function filt()
{
	texto =document.getElementById("option").value;
	
	
	if (texto=="todo") 
	{
		$('#ta0').show();
		$('#ta1').show();
		$('#ta2').show();
		$('#ta3').show();
	}

	if (texto=="grafica") 
	{
		$('#ta0').show();
		$('#ta1').hide();
		$('#ta2').hide();
		$('#ta3').hide();
	}

	if (texto=="monior") 
	{
		$('#ta0').hide();
		$('#ta1').show();
		$('#ta2').hide();
		$('#ta3').hide();
	}


	if (texto=="ram") 
	{
		$('#ta0').hide();
		$('#ta1').hide();
		$('#ta2').show();
		$('#ta3').show();
	}
}


