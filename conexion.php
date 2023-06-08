<!-- ?php
$conexion=mysqli_connect('https://databases.000webhost.com/index.php?route=/database/structure&db=id20881395_analisisuno#','id20881395_edsonhervla@2a02:4780:bad:c0de::13','321/Edson','id20881395_analisisuno') or die ('Error al conectar con la base de datos');
? -->

<?php
$servername = "localhost/https://databases.000webhost.com/index.php?route=/database/structure&db=id20881395_analisisuno#','id20881395_edsonhervla@2a02:4780:bad:c0de::13";
$database = "id20881395_analisisuno";
$username = "id20881395_edsonhervla";
$password = "321/Edson";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>