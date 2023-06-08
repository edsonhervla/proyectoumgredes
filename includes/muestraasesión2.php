<header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
      
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">PÁGINA INICIAL ANÁLISIS DE SISTEMAS, </a>
      <a class="navbar-brand" href="#">TIENDA S. A.</a>
    </div>
      
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php print 'Bienvenido: '; print $_SESSION['name'];?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
        </li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php print 'Menú de Opciones a Productos'?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="home2.php">Ingresar</a></li>
                <li><a href="home3.php">Consultar</a></li>
                <li><a href="home4.php">Modificar</a></li>
                <li><a href="home5.php">Contacto</a></li>
                </ul>
             </li>
        </ul>
    </div>
  </div>   
</nav>
</header>