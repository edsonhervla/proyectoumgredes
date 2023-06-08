<?php
include 'pdo.php';
//$db=new PDO("mysql:host=localhost; dbname=analisisuno;","root","");

$idprod=$_GET['idprod'];

 if ($db->query("DELETE FROM productos WHERE idprod=$idprod")) 
 {
 	header("location:home4.php");
 } 
 else 
 {
  header("location:home4.php");
 }
 ?>