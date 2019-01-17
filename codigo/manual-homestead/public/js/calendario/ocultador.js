var visiblef = false;
var presionado = false;
var encabezado;

$(document).ready(function(){
	$('#lista_mes th').hide();
	$('#lista_mes td').hide();
	$('#micalendario th').hide();
	$('#micalendario td').hide();
	$('.mes_grande').hide();


 $("#firstyear").click(function(){
        $('.Syear table').toggle();
        $('.Sboton').toggle(1, function()
        	{
        		if (visiblef == true) 
				{
					$('.Fyear td').css({ 'width':'1rem', 'height':'1rem' });
					$('.Fyear').css({ 'margin-bottom': '0rem',  });	
          // $("#firstyear").val("2018");
          $('#firstyear').text(document.querySelector('#firstyear').dataset.year);
					visiblef = false;
					presionado = true;
				}

				else 
				{ 
					 $('.Fyear td').css({ 'width':'1.5rem', 'height':'1.8rem',  });
           $('.Fyear').css({ 'margin-bottom': '10rem',  });
           var years = document.querySelector('#firstyear').dataset.year+'-'+document.querySelector('#secondyear').dataset.year;
					 $("#firstyear").text(years);
						 
					visiblef = true;
					presionado = false;
				}
        	});

    });

  $("#secondyear").click(function(){
        $('.Fyear table').toggle();
        $('.Fboton').toggle(1, function()
        	{
        		if (visiblef == true) 
				{
					$('.Syear td').css({ 'width':'1rem', 'height':'1rem' });
					$('.Syear').css({ 'margin-bottom': '2rem',  });	
					$("#secondyear").text(document.querySelector('#secondyear').dataset.year);
					visiblef = false;
					presionado = false;
				}

				else 
				{ 
          $('.Syear td').css({ 'width':'1.5rem', 'height':'1.8rem',  });
          var years = document.querySelector('#firstyear').dataset.year+'-'+document.querySelector('#secondyear').dataset.year;
					$("#secondyear").text(years);	 
					visiblef = true;
					presionado = true;
				}

        	});
        });



  	$(".agosto table").click(function(){
  			encabezado =  $('#agostof').text(); 
  	  		$('#gran_mes p').text(encabezado);
           $('#lista_mes th').show();
           $('#lista_mes td').show();
           $('#lista th').hide();
           $('#lista td').hide();
           $('.Fyear').hide();
           $('.Fboton').hide();
           $('.Syear').hide();
           $('.Sboton').hide();
           $('.mes_grande').show();


        }); 


  	  	$(".septiembre table").click(function(){
  	  		encabezado =  $('#septiembre').text(); 
  	  		$('#gran_mes p').text(encabezado);
           $('#lista_mes th').show();
           $('#lista_mes td').show();
           $('#lista th').hide();
           $('#lista td').hide();
           $('.Fyear').hide();
           $('.Fboton').hide();
           $('.Syear').hide();
           $('.Sboton').hide();
           $('.mes_grande').show();


        }); 

  	  	$(".octubre table").click(function(){
  	  		encabezado =  $('#octubre').text(); 
  	  		$('#gran_mes p').text(encabezado);
           $('#lista_mes th').show();
           $('#lista_mes td').show();
           $('#lista th').hide();
           $('#lista td').hide();
           $('.Fyear').hide();
           $('.Fboton').hide();
           $('.Syear').hide();
           $('.Sboton').hide();
           $('.mes_grande').show();


        }); 

        $(".noviembre table").click(function(){
        	encabezado =  $('#noviembre').text(); 
  	  		$('#gran_mes p').text(encabezado);
           $('#lista_mes th').show();
           $('#lista_mes td').show();
           $('#lista th').hide();
           $('#lista td').hide();
           $('.Fyear').hide();
           $('.Fboton').hide();
           $('.Syear').hide();
           $('.Sboton').hide();
           $('.mes_grande').show();


        }); 

        $(".diciembre table").click(function(){
        	encabezado =  $('#diciembre').text(); 
  	  		$('#gran_mes p').text(encabezado);
           $('#lista_mes th').show();
           $('#lista_mes td').show();
           $('#lista th').hide();
           $('#lista td').hide();
           $('.Fyear').hide();
           $('.Fboton').hide();
           $('.Syear').hide();
           $('.Sboton').hide();
           $('.mes_grande').show();


        }); 



        $(".enero table").click(function(){
        	encabezado =  $('#enero').text(); 
  	  		$('#gran_mes p').text(encabezado);
           $('#lista_mes th').show();
           $('#lista_mes td').show();
           $('#lista th').hide();
           $('#lista td').hide();
           $('.Fyear').hide();
           $('.Fboton').hide();
           $('.Syear').hide();
           $('.Sboton').hide();
           $('.mes_grande').show();


        }); 



        $(".febrero table").click(function(){
        	encabezado =  $('#febrero').text(); 
  	  		$('#gran_mes p').text(encabezado);
           $('#lista_mes th').show();
           $('#lista_mes td').show();
           $('#lista th').hide();
           $('#lista td').hide();
           $('.Fyear').hide();
           $('.Fboton').hide();
           $('.Syear').hide();
           $('.Sboton').hide();
           $('.mes_grande').show();


        }); 


        $(".marzo table").click(function(){
        	encabezado =  $('#marzo').text(); 
  	  		$('#gran_mes p').text(encabezado);
           $('#lista_mes th').show();
           $('#lista_mes td').show();
           $('#lista th').hide();
           $('#lista td').hide();
           $('.Fyear').hide();
           $('.Fboton').hide();
           $('.Syear').hide();
           $('.Sboton').hide();
           $('.mes_grande').show();


        }); 



        $(".abril table").click(function(){
        	encabezado =  $('#abril').text(); 
  	  		$('#gran_mes p').text(encabezado);
           $('#lista_mes th').show();
           $('#lista_mes td').show();
           $('#lista th').hide();
           $('#lista td').hide();
           $('.Fyear').hide();
           $('.Fboton').hide();
           $('.Syear').hide();
           $('.Sboton').hide();
           $('.mes_grande').show();


        }); 


        $(".mayo table").click(function(){
        	encabezado =  $('#mayo').text(); 
  	  		$('#gran_mes p').text(encabezado);
           $('#lista_mes th').show();
           $('#lista_mes td').show();
           $('#lista th').hide();
           $('#lista td').hide();
           $('.Fyear').hide();
           $('.Fboton').hide();
           $('.Syear').hide();
           $('.Sboton').hide();
           $('.mes_grande').show();


        }); 


        $(".junio table").click(function(){
        	encabezado =  $('#junio').text(); 
  	  		$('#gran_mes p').text(encabezado);
           $('#lista_mes th').show();
           $('#lista_mes td').show();
           $('#lista th').hide();
           $('#lista td').hide();
           $('.Fyear').hide();
           $('.Fboton').hide();
           $('.Syear').hide();
           $('.Sboton').hide();
           $('.mes_grande').show();


        }); 



        $(".julio table").click(function(){
        	encabezado =  $('#julio').text(); 
  	  		$('#gran_mes p').text(encabezado);
           $('#lista_mes th').show();
           $('#lista_mes td').show();
           $('#lista th').hide();
           $('#lista td').hide();
           $('.Fyear').hide();
           $('.Fboton').hide();
           $('.Syear').hide();
           $('.Sboton').hide();
           $('.mes_grande').show();


        }); 

        $(".agostos table").click(function(){
        	encabezado =  $('#agostos').text(); 
  	  		$('#gran_mes p').text(encabezado);
           $('#lista_mes th').show();
           $('#lista_mes td').show();
           $('#lista th').hide();
           $('#lista td').hide();
           $('.Fyear').hide();
           $('.Fboton').hide();
           $('.Syear').hide();
           $('.Sboton').hide();
           $('.mes_grande').show();


        });

        


  	$("#gran_mes").click(function(){
           $('#lista_mes th').hide();
           $('#lista_mes td').hide();
           $('#lista th').show();
           $('#lista td').show();
           $('.Fyear').show();
           
           $('.Syear').show();
           
           $('.mes_grande').hide();

           if (visiblef == false) 
           {
           		$('.Sboton').show();
           		$('.Fboton').show();
           }
           else
           {
           		if (presionado == true) 
           		{
           			$('.Sboton').show();
           			
           			
           		}
           		else
           		{
           			$('.Fboton').show();
           			
           		}
           }


        }); 


  	 $("#Eventoplus").click(function(){
  	 		alert();
        	
  	 		$('#emergente').dialog();

        });


  
});


