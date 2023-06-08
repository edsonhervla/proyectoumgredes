<?php
session_start();
if (isset($_SESSION['name'])){
?>

<!DOCTYPE html>
<html lang="en">
<?php include ("includes/head.php"); ?>
    
<body background="images/Material.png">
<?php include ("includes/muestraasesión2.php"); ?> 

<article style="text-align: center;">
    <h3>Estás en la Sección para Ingresar Productos</h3>
</article>

<div class="modal-dialog modal-sm">
    <div class="modal-content">
        
        <div class="modal-header">
         <h2>Ingresar Productos</h2>
        </div>
        
        <div class="modal-body">
          <form action="archivo_registrar_productos.php" method="post" enctype="application/x-www-form-urlencoded">
              
            <div class="form-group">
              <label for="control1_nombre">Nombre</label>
              <input type="text" name="datos_registrar_nombre" class="form-control" id="control1_nombre" placeholder="Producto" required>
            </div>
              
            <div class="form-group">
              <label for="control1_precio">Precio Q.</label>
              <input type="text" name="datos_registrar_precio" class="form-control" id="control1_precio" placeholder="Valor" required>
            </div>
              
            <button type="submit" class="btn btn-success btn-block">Ingresar</button>
          </form>
        </div>
        
    </div>
</div> 

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<br><br><br><br><br>
<?php include ("includes/derechosreservados.php"); ?>
    
</body>
</html>
<?php
}

else{
 header ('location: index.php');
}
?>