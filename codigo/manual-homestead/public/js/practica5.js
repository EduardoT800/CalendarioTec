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


function changeText() {
	var name = document.getElementById("Nombre").value;
  console.log(name)
  
	var lastname = document.getElementById("Apellido").value;
	var age = document.getElementById("Edad").value;
	document.getElementById("myid_01").innerHTML = name + " " +lastname + " " +age + " " +"Años de edad";

}


function tarea()
{
	var base = document.getElementById("Base").value;
	var altura= document.getElementById("Altura").value;
	var msg =(base*altura)/2;
	alert(msg);

}

function primo()
{
  var prim="2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89 y 97"
    

  document.getElementById("Vprimos").innerHTML = prim;


}

function pintar(colore)
  {
    
    document.bgColor = colore;
  }

function conversor(c)
{

  var m = document.getElementById("moneda").value;
  var res;

  if (c=="peso")
   {
      res=m*0.0534;
   }
   else
   {
     res=m*18.7229;
   } 


    document.getElementById("convertido").innerHTML = res;
}

function limpiar()
{
  document.getElementById("convertido").innerHTML = " ";
}