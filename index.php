<!DOCTYPE html>
<html lang="en">
 
<?php
include ("includes/head.php");
?>
   
<body background="images/material-design.png">
<nav class="navbar navbar-default">  
<div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">PROYECTO ANÁLISIS DE SISTEMAS, TIENDA S. A.</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">Iniciar sesión</a></li>
            <li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm-registrar">Registrate</a></li>
        </ul>
    </div> 
</div>
</nav>
    
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
         <h2>Iniciar sesión</h2>
        </div>
        <div class="modal-body">
          <form action="archivo_iniciar_sesion.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control1_nombre">Usuario</label>
              <input type="text" name="datos_introducidos_usuario" class="form-control" id="control1_nombre" placeholder="Usuario" required>
            </div> 
            <div class="form-group">
              <label for="control1_contraseña">Contraseña</label>
              <input type="password" name="datos_introducidos_contraseña" class="form-control" id="control1_contraseña" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Ingresar a la Tienda</button>
          </form>
        </div> 
    </div>
  </div>
</div>
    
<div class="modal fade bs-example-modal-sm-registrar" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
         <h2>Regístrate</h2>
        </div>
        <div class="modal-body">
          <form action="archivo_registrar_usuarios.php" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="control2_nombre">Usuario</label>
              <input type="text" name="datos_registrar_usuario" class="form-control" id="control2_nombre" placeholder="Usuario" required>
            </div>
            <div class="form-group">
              <label for="control2_contraseña">Contraseña</label>
              <input type="password" name="datos_registrar_contraseña" class="form-control" id="control2_contraseña" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn btn-success btn-block">Registrar</button>
          </form>
        </div> 
    </div>
  </div>
</div>
    
<TABLE WIDTH="60%" BORDER="0" align="center">
<TR>
<TH COLSPAN="1">
<div class="modal-dialog modal-sm">
    <div class="modal-content"> 
        <div class="modal-header">
         <h3>TIENDA S. A.</h3>
        </div>
        <div class="modal-body">
          <h4><font color="Green">SOLUCIONES CREATIVAS PARA TODOS.</font></h4>
          <h4><font color="Green">PRODUCTOS PARA TODOS LOS GUSTOS.</font></h4>
        </div>
    </div>
</div>    
</TH>

<TH COLSPAN="1">
    <div class="modal-dialog modal-sm">
        <h2></h2>    
    </div>
</TH>
</TR>
</TABLE>   

<br><br><br><br><br><br><br><br><br><br>

<?php include ("includes/derechosreservados.php"); ?>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>