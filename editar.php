<?php
include 'pdo.php';
$idprod=$_POST['idprod'];
$nomprod=$_POST['nomprod'];
$precio=$_POST['precio'];

//$db=new PDO("mysql:host=localhost; dbname=analisisuno;", "root","");
//$db=new PDO("mysql:host=predes.mysql.database.azure.com; dbname=analisisuno;", "predes","Aa123456");

 if ($db->query("UPDATE productos SET nomprod='$nomprod', precio=$precio WHERE idprod='$idprod'")) 
 {
 	header("location: home4.php");
 } 
 else 
 {
     header("location: home4.php");
 }
 ?>