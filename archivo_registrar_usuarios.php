<?php
include 'conexion.php';

if (isset($_POST['datos_registrar_usuario']) and isset($_POST['datos_registrar_contraseña']))
{
 $usuario=mysqli_real_escape_string($conexion,$_POST['datos_registrar_usuario']);
 $contraseña=password_hash($_POST['datos_registrar_contraseña'],PASSWORD_DEFAULT);
 $ingresar=mysqli_query($conexion,'insert into usuarios(nombre, contrasenia) values ("'.$usuario.'","'.$contraseña.'")') 
 or die ('<p>Error al registrar</p><br>'.mysqli_error($conexion));
  
 header ('location: index.php');
}

else
{
 header ('location: index.php');
}
?>