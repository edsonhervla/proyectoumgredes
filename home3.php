<?php
session_start();
if (isset($_SESSION['name'])){
?>

<?php
define("NRO_REGISTROS",1000);
 include 'pdo.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Proyecto Sistemas</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<meta charset="utf-8">
    
<style type="text/css">
  .pagina {
   padding:8px 16px;
   border:1px solid #ccc;
   color:#333;
   font-weight:bold;
  }
</style>
</head>
  
<body background="images/Material.png">
<?php include ("includes/muestraasesión2.php"); ?> 

<div class="container" align=center>

<article style="text-align: center;">
    <h3>Estás en la Sección para Consultar Productos</h3>
</article>
    
<div class="row">
<div class="col-md-8">
<div class="panel-body">

<?php
	$search_keyword = '';
	if(!empty($_POST['search']['keyword'])) {
	 $search_keyword = $_POST['search']['keyword'];
	}
	$sql = "SELECT * FROM productos WHERE nomprod LIKE :keyword OR idprod LIKE :keyword ORDER BY idprod DESC ";
	
	$per_page_html = '';
	$page = 1;
	$start=0;
	if(!empty($_POST["page"])) {
		$page = $_POST["page"];
		$start= ($page-1) * NRO_REGISTROS ;
	}
	$limit=" limit " . $start . "," . NRO_REGISTROS;
	$pagination_statement = $db->prepare($sql);
	$pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pagination_statement->execute();
	$row_count = $pagination_statement->rowCount();
    
	if(!empty($row_count)){
		$per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
		$page_count=ceil($row_count/NRO_REGISTROS);
		if($page_count>1) {
			for($i=1;$i<=$page_count;$i++){
				if($i==$page){
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current" />';
				} else {
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page" />';
				}
			}
		}
		$per_page_html .= "</div>";
	}

	$query = $sql.$limit;
	$pdo_statement = $db->prepare($query);
	$pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pdo_statement->execute();
	$resultados = $pdo_statement->fetchAll(); 
?>
 
<form name='frmSearch' action='' method='post'>
<div style='text-align:center; margin:20px 0px;'>
<div class="row"><div class="col-lg-6"></div>
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Busqueda..."  name='search[keyword]' value="<?php echo $search_keyword; ?>" id='keyword' maxlength='25'>
      <span class="input-group-btn">
          <form action="home3.php" method="post" enctype="application/x-www-form-urlencoded">
                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-refresh"></span></button>
          </form>
      </span>
    </div>
  </div>
</div>
</div>

    
<div class="table-responsive">  
  <table class="table table-bordered">
    <thead>
	<tr>
	  <th class='table-header' width='5%'>Código</th>
	  <th class='table-header' width='20%'>Producto</th>
	  <th class='table-header' width='20%'>Precio</th>
	</tr>
    </thead>
        
    <tbody id='table-body'>
	<?php
	if(!empty($resultados)) {
		foreach($resultados as $row) {
	?>
	  <tr class='table-row'>
		<td><?php echo $row['idprod']; ?></td>
		<td><?php echo $row['nomprod']; ?></td>
		<td><?php echo 'Q.   ', $row['precio']; ?></td>
	  </tr>
    <?php
		}
	}
	?>
    </tbody>
  </table>
</div>
<?php echo $per_page_html; ?>
</form>

</div>
</div>
</div>
</div>

<br><br><br><br><br><br><br>
<?php include ("includes/derechosreservados.php"); ?>
</body>
</html>

<?php
}
else{
    header ('location: index.php');
}
?>