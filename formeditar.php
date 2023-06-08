<?php
session_start();
if (isset($_SESSION['name']))
{
?>

<?php
include 'pdo.php';
$idprod= $_GET['idprod'];
$consulta=$db->query("SELECT * FROM productos WHERE idprod=$idprod")->fetchAll(PDO::FETCH_OBJ); 
$sql=$consulta[0];
?>

<!DOCTYPE html>
<html lang="en">
<?php include ("includes/head.php"); ?> 

<body background="images/Material.png">
<?php include ("includes/muestraasesión2.php"); ?>     
<article style="text-align: center;">
    <h3>Modificación de los Productos</h3>
</article>
<div class="modal-dialog modal-sm">
<div class="modal-content">
    <div class="modal-header">
     <h3>Modificar Productos</h3>
    </div>
<div class="modal-body">
<form action="editar.php" method="post" class="form-horizontal">
  <div class="form-group">
    <label class="col-sm-2 control-label">Codigo</label>
    <div class="col-sm-10">
      <input value="<?php echo $sql->idprod; ?>" name='idprod' type="text" class="form-control" placeholder="Escriba el código" readonly>
    </div>
  </div>
                    
  <div class="form-group">
    <label class="col-sm-2 control-label">Marca</label>
    <div class="col-sm-10">
      <input value="<?php echo $sql->nomprod; ?>" name="nomprod" type="text" class="form-control" placeholder="Escriba nombre del producto">
    </div>
  </div>
                
  <div class="form-group">
    <label class="col-sm-2 control-label">Precio Q.</label>
    <div class="col-sm-10">
      <input value="<?php echo $sql->precio; ?>" name="precio" type="text" class="form-control" placeholder="Escriba el Precio">
    </div>
  </div>
                    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Editar</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
    
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<br><br><br><br>
<?php include ("includes/derechosreservados.php"); ?>
</body>
</html>

<?php
}
else
{
    header ('location: index.php');
}
?>