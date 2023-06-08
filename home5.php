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
    <h3>Estás en la Sección Contacto del desarrollador!!!</h3>
</article>

<TABLE WIDTH="70%" BORDER="0" align="center">
<TR>
<TH>
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        
        <div class="modal-header">
         <h4>Facebook</h4>
        </div>
        
        <div class="modal-body">
          <h5><font color="Green">Visitanos en nuestra red social de Facebook.</font></h5>
          <h5><font color="Green">Puedes escribirnos por Inbox por cualquier duda o sugerencia.</font></h5>
        </div>
            
        <div class="modal-footer">
          <center><a href="https://www.facebook.com/edson.lastorxirum" target="_blank">Edson HerVla</a></center>
        </div>
        </div>   
    </div>
</TH>
    
<TH>
<div class="modal-dialog modal-sm">
    <div class="modal-content">
        
        <div class="modal-header">
         <h4>Twitter</h4>
        </div>
        
        <div class="modal-body">
          <h5><font color="Green">Visitanos en nuestra red social de Twitter.</font></h5>
          <h5><font color="Green">Puedes escribirnos por Direct por cualquier duda o sugerencia.</font></h5>
                    
        <div class="modal-footer">
          <center><a href="https://twitter.com/hervla_edson" target="_blank">@hervla_edson</a></center>
        </div>
        </div>
        
    </div>
</div>    
</TH>
    
<TH>
<div class="modal-dialog modal-sm">
    <div class="modal-content">
        
        <div class="modal-header">
         <h4>Instagram</h4>
        </div>
        
        <div class="modal-body">
          <h5><font color="Green">Visitanos en nuestra red social de Instagram.</font></h5>
          <h5><font color="Green">Puedes escribirnos por Direct por cualquier duda o sugerencia.</font></h5>
                    
        <div class="modal-footer">
          <center><a href="https://www.instagram.com/hervla_edson/" target="_blank">@hervla_edson</a></center>
        </div>
        </div>
        
    </div>
</div>    
</TH>
</TR>
    
<TR>
<TH></TH>
<TH>
<div class="modal-dialog modal-sm">
    <div class="modal-content">
        
        <div class="modal-header">
         <h4>Whatsapp</h4>
        </div>
        
        <div class="modal-body">
          <h5><font color="Green">Contáctanos directamente a nuestro número telefónico y escribenos por whatsapp.</font></h5>
        </div>
        
        <div class="modal-footer">
          <center><a href="#">502 33180143</a></center>
        </div>
        
    </div>
</div>
</TH>
<TH></TH>
</TR>
</TABLE>
    
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

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