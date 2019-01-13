var passw;

function soloLetras(e)
{
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


function numbe0()
{
  passw = document.getElementById("pass").value;
  

  if (passw.length<8) 
  {
    passw=passw+document.getElementById("numb0").value
    document.getElementById("pass").value=passw;
  }


}


function numbe1()
{
  passw = document.getElementById("pass").value;
  

  if (passw.length<8) 
  {
    passw=passw+document.getElementById("numb1").value
    document.getElementById("pass").value=passw;
  }


}



function numbe2()
{
  passw = document.getElementById("pass").value;
  

  if (passw.length<8) 
  {
    passw=passw+document.getElementById("numb2").value
    document.getElementById("pass").value=passw;
  }

}

function numbe3()
{
  passw = document.getElementById("pass").value;
  

  if (passw.length<8) 
  {
    passw=passw+document.getElementById("numb3").value
    document.getElementById("pass").value=passw;
  }

}

function numbe4()
{
  passw = document.getElementById("pass").value;
  

  if (passw.length<8) 
  {
    passw=passw+document.getElementById("numb4").value
    document.getElementById("pass").value=passw;
  }

}

function numbe5()
{
  passw = document.getElementById("pass").value;
  

  if (passw.length<8) 
  {
    passw=passw+document.getElementById("numb5").value
    document.getElementById("pass").value=passw;
  }

}

function numbe6()
{
  passw = document.getElementById("pass").value;
  

  if (passw.length<8) 
  {
    passw=passw+document.getElementById("numb6").value
    document.getElementById("pass").value=passw;
  }

}

function numbe7()
{
  passw = document.getElementById("pass").value;
  

  if (passw.length<8) 
  {
    passw=passw+document.getElementById("numb7").value
    document.getElementById("pass").value=passw;
  }

}

function numbe8()
{
  passw = document.getElementById("pass").value;
  

  if (passw.length<8) 
  {
    passw=passw+document.getElementById("numb8").value
    document.getElementById("pass").value=passw;
  }

}

function numbe9()
{
  passw = document.getElementById("pass").value;
  

  if (passw.length<8) 
  {
    passw=passw+document.getElementById("numb9").value
    document.getElementById("pass").value=passw;
  }

}



$(document).ready(function() {
  $('#numb').click(function() {
    $('#pass').val('');
  });

});

function borraru()
{
  passw = document.getElementById("pass").value;
  passw = passw.substring(0,passw.length-1);
  document.getElementById("pass").value=passw;
}