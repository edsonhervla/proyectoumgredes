<?php
session_start();
if (isset($_SESSION['name'])){
?>

<!DOCTYPE html>
<html lang="en">
<?php include ("includes/head.php"); ?>

<body background="images/Material.png">  
<?php include ("includes/muestrasesión1.php"); ?> 
       
<article style="text-align: center;">
    <h3>¡Bienvenido <?php print $_SESSION['name'];?>!</h3>
    <h4>Gracias por Registrarte, ahora puedes utilizar el Sistema</h4>
</article>

<TABLE WIDTH="50%" BORDER="0" align="center">
<TR>
<TH>
<div class="modal-dialog modal-sm">
    <div class="modal-content">
        
        <div class="modal-header">
         <h2>Ingresar Productos</h2>
        </div>
        
        <div class="modal-body">
          <form action="home2.php" method="post">
            <button type="submit" class="btn btn-success btn-block">Ir a Productos</button>
          </form>
        </div>
        
    </div>
</div>    
</TH>
<TH>
<div class="modal-dialog modal-sm">
    <div class="modal-content">
        
        <div class="modal-header">
         <h2>Consultas</h2>
        </div>
        
        <div class="modal-body">
          <form action="home3.php" method="post">  
            <button type="submit" class="btn btn-success btn-block">Ir a Consultas</button>
          </form>
        </div>
        
    </div>
</div>
</TH>
</TR>
<TR>
<TH>
<div class="modal-dialog modal-sm">
    <div class="modal-content">
        
        <div class="modal-header">
         <h2>Modificar Productos</h2>
        </div>
        
        <div class="modal-body">
          <form action="home4.php" method="post">
            <button type="submit" class="btn btn-success btn-block">Ir a Modificaciones</button>
          </form>
        </div>
        
    </div>
</div>    
</TH>   
<TH>
<div class="modal-dialog modal-sm">
    <div class="modal-content">
        
        <div class="modal-header">
         <h2>Contacto Social</h2>
        </div>
        
        <div class="modal-body">
          <form action="home5.php" method="post">
            <button type="submit" class="btn btn-success btn-block">Ir a Contactos</button>
          </form>
        </div>
        
    </div>
</div>    
</TH>
</TR>
</TABLE>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php include ("includes/derechosreservados.php"); ?>
    
</body>
</html>

<?php
}
else{
 header ('location: index.php');
}
?>