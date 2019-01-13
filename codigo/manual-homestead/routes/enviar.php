<?php 
$destino="5403@itescam.edu.mx";
$nombre=$_POST["Nombre"];
$correo=$_POST["Pais"];
$mensaje=$_POST["Estado"]; 
$mensaje=$_POST["Velocidad"]; 
$mensaje=$_POST["Disenio"]; 
$contenido="Nombre: ".$Nombre."\nPais: ".$Pais."\nEstado: ".$Estado. "\nVelocidad: " .$Velocidad. "\nDisenio: " $Disenio; 
mail($destino,"Contacto", $contenido);
header("Location: views\practica.blade.php"); 
?>