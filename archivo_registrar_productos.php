<?php
include 'conexion.php';

if (isset($_POST['datos_registrar_nombre']) and isset($_POST['datos_registrar_precio']))
{
 $nombre=mysqli_real_escape_string($conexion,$_POST['datos_registrar_nombre']);
 $precio=mysqli_real_escape_string($conexion,$_POST['datos_registrar_precio']);
 $ingresar=mysqli_query($conexion, 'insert into productos(nomprod, precio) values ("'.$nombre.'","'.$precio.'")') 
 or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
   
 header ('location: home2.php');
}

else
{
 header ('location: home2.php');
}
?>