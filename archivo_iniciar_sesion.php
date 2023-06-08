<?php
session_start();
include 'conexion.php';

if (empty($_SESSION) and isset($_POST['datos_introducidos_usuario']))
{
    $nombre_de_usuario=mysqli_real_escape_string($conexion,$_POST['datos_introducidos_usuario']);
    $contraseña_introducida=$_POST['datos_introducidos_contraseña'];
    $consulta='select * from usuarios where nombre="'.$nombre_de_usuario.'"';
    
    if ($ejecución_de_la_consulta=$conexion->query($consulta))
    {
     $contraseña_guardada=$ejecución_de_la_consulta->fetch_assoc();
     $verificar_contraseña=password_verify($contraseña_introducida,$contraseña_guardada['contrasenia']);
       if ($verificar_contraseña){
         $_SESSION['name']=$nombre_de_usuario;
         header ('location: home.php');
        }
        else
        {
         header ('location: index.php');
        }
    }
    else
    {
     header ('location: index.php');
    }
}
else
{
 header ('location: index.php');
}
?>