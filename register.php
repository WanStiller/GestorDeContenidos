<?php 
session_start();
include 'includes/config.php';
$here="Formulario de Registro"; ?>


<?php //Muestra datos de usuario
  if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){/**/} else {require("includes/datos_usuario.php");}
?>




<?php require_once 'includes/special.php'; ?>
<body>


  
<?php //require('includes/header.php'); ESTA LINEA ESTABLECE EL MENU SI ES LOGIN O NO
  if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){include("includes/header.php");} else {require("includes/header-log.php");}
?>


<div class="container">   
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
    <form method="post" id="add" name="add" style="margin-top: 25%;margin-bottom: 25%;color: gray;padding: 5%">
        <?php //require('includes/header.php'); ESTA LINEA ESTABLECE  SI ES LOGIN O NO
  if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){include("includes/register-script.php");} else {require("includes/sesion-iniciada.php");}
        ?>
    </form>
</div>
<div class="col-md-4"></div>
</div>
</div>
<?php //include('includes/footer.php');?>
<script src="vendor/bootstrap/js/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/bootstrap/js/up.js"></script>
<?php require_once('includes/submenu.php');?>
<script>
$(document).ready(function(){
    load(1);
});
$( "#add" ).submit(function( event ) {
  $('#save_data').attr("disabled", true);
 var parametros = $(this).serialize();
     $.ajax({
            type: "POST",
            url: "action/register.php",
            data: parametros,
             beforeSend: function(objeto){
                $("#result").html("<div style='text-align:center;color:white;'>Registrando...</div>");
              },
            success: function(datos){
            $("#result").html(datos);
            $('#save_data').attr("disabled", false);
            load(1);
          }
    });
  event.preventDefault();
})
</script>
</body>
<?php //include 'includes/fb.php'; ?>
</html>