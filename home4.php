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
    <h3>Estás en la Sección Modificar Productos</h3>
</article>

<?php
    include 'pdo.php';
    $filas=$db->query("SELECT * FROM productos")->fetchAll(PDO::FETCH_OBJ);
    $sql=$filas[0];
?>
<div class="container" align=center>
<div class="row">
<div class="col-md-8">
<div class="panel-body">
<div class="table-responsive">  
  <table class="table table-bordered">
        <thead>
	       <tr>
               <th class='table-header' width='5%'>Código</th>
               <th class='table-header' width='15%'>Producto</th>
               <th class='table-header' width='10%'>Precio</th>
               <th class='table-header' width='1%'>Editar</th>
               <th class='table-header' width='1%'>Eliminar</th>
	       </tr>
        </thead>
                
        <tbody>
		<?php foreach ($filas as $sql):
            ?>
			<tr>
				<td><?php echo $sql->idprod; ?></td>
				<td><?php echo $sql->nomprod; ?></td>
				<td><?php echo 'Q.   ', $sql->precio; ?></td>                    
				<td><a class="btn btn-info glyphicon glyphicon-pencil" href="formeditar.php?idprod=<?php echo $sql->idprod;?>"></a></td>
				<td><a class="btn btn-danger glyphicon glyphicon-trash" href="eliminar.php?idprod=<?php echo $sql->idprod; ?>"></a></td>
			</tr>
		<?php endforeach ?>
        </tbody>
    </table>
</div>
</div>
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