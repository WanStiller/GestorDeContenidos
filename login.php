<?php 
session_start();
include 'includes/config.php';
$here="Registro"; ?>

<?php //Muestra datos de usuario
  if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){/**/} else {require("includes/datos_usuario.php");}
?>


<?php require_once 'includes/special.php'; ?>
<body>

  
<?php //require('includes/header.php'); ESTA LINEA ESTABLECE EL MENU SI ES LOGIN O NO
  if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){include("includes/header.php");} else {require("includes/header-log.php");}
?>

<div class="container" style="margin-top: 6em">
  <div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
	<form style="margin-top: 25%;margin-bottom: 25%;color: gray;padding: 5%" action="action/login.php" method="post">
      <?php 
$invalid=sha1(md5("contrasena y email invalido"));
if (isset($_GET['invalid']) && $_GET['invalid']==$invalid) {
echo "<div class='alert alert-danger alert-dismissible' role='alert'>
<strong>Error!</strong> Contraseña o correo Electrónico invalido. Recuperar
</div>";
}
$error=sha1(md5("cuenta inactiva"));
if (isset($_GET['error']) && $_GET['error']==$error) {
echo "<div class='alert alert-warning alert-dismissible' role='alert'>
<strong>Error!</strong> Cuenta inactiva!
</div>";
}
?>


<?php //require('includes/header.php'); ESTA LINEA ESTABLECE  SI ES LOGIN O NO
  if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){include("includes/login-script.php");} else {require("includes/sesion-iniciada.php");}
?>

</form>
</div>
<div class="col-md-4"></div>
</div>
</div>
<?php //include('includes/footer.php');?>
<script>
// Mostrar Pass
  /*function mostrarContrasena(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }*/
// Mostrar Pass
$(document).ready(function(){
    load(1);
});
$( "#add" ).submit(function( event ) {
  $('#save_data').attr("disabled", true);
 var parametros = $(this).serialize();
     $.ajax({
            type: "POST",
            url: "action/adduser.php",
            data: parametros,
             beforeSend: function(objeto){
                $("#result").html("Mensaje: Cargando...");
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
<script src="vendor/bootstrap/js/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/bootstrap/js/up.js"></script>
<?php require_once('includes/submenu.php');?>
</body>
<?php //include 'includes/fb.php'; ?>
</html>