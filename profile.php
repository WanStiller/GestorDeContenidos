<?php 
    session_start();
    require "includes/config.php";
    $here="Editar Perfil";
        if (!isset($_SESSION['user_id']) && $_SESSION['user_id']==null) {
        header("location:index.php");
    }
?>


<?php //Muestra datos de usuario
  if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){/**/} else {require("includes/datos_usuario.php");}
?>




<?php require_once 'includes/special.php'; ?>
<body>
<?php //require('includes/header.php'); ESTA LINEA ESTABLECE EL MENU SI ES LOGIN O NO
  if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){include("includes/header.php");} else {require("includes/header-log.php");}
?>
<div class="container">



<section class="container">

            <div class="row">

                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div>

                            <h5>Cambiar Avatar: </h5>

<div class="row" style="padding: 1em">
    <div class="col-md-3"></div>
        <div class="col-md-6"><div style="background-image: url(images/profiles/<?php echo $profile_pic ?>);width: 100%;height:0;padding-top:100%; background-position: 50% 50%; background-size: cover;position: relative;border-radius: 50%">
    </div>
</div>
    <div class="col-md-3"></div>

</div>

 
                      
                            <form method="post" id="formulario" enctype="multipart/form-data">
                                 <div class="custom-file">
  <input type="file" class="custom-file-input" id="customFile" name="file">
  <label class="custom-file-label" for="customFile">Seleccionar Imagen ...</label>
</div>

                            
                            </form>
                        

  



          


                        <div id="respuesta"></div>
                    <br>
                </div>
                <div id="respuesta"></div>
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h5>Datos Personales: </h5>
                        </div> <!-- /.box-header -->
                        <form role="form" method="post" action="action/updprofile.php"><!-- form start -->
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="fullname">Nombre Completo</label>
                                    <input name="fullname" type="text" class="form-control" id="fullname" value="<?php echo $fullname ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Correo Electrónico</label>
                                    <input name="email" type="email" class="form-control" id="email" value="<?php echo $email ?>">
                                </div>
                                <div class="form-group">
                                    <label for="password">Contraseña Actual</label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="*******">
                                </div>
                                <div class="form-group">
                                    <label for="new_password">Nueva Contraseña</label>
                                    <input name="new_password" type="password" class="form-control" placeholder="*******" id="new_password">
                                </div>
                                <div class="form-group">
                                    <label for="confirm_new_password">Confirmar Nueva Contraseña</label>
                                    <input name="confirm_new_password" type="password" class="form-control" placeholder="*******" id="confirm_new_password">
                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <button name="token" type="submit" class="btn btn-success">Actualizar Datos</button>
                            </div>
                        </form>
                    </div><!-- /.box -->
                </div>

                                <div class="col-md-6"></div>
            </div><!-- /.row -->
        </section>

    <?php //include('includes/sidebar-3.php');?>

</div>




<?php include('includes/footer.php');?>

<script src="vendor/bootstrap/js/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="odometer-master/odometer.min.js"></script>
<script src="vendor/bootstrap/js/up.js"></script>
<?php require_once('includes/submenu.php');?>
<script>
    $(function(){
    $("input[name='file']").on("change", function(){
        var formData = new FormData($("#formulario")[0]);
        var ruta = "action/uploadprofile.php";
        $.ajax({
            url: ruta,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(datos)
            {
                $("#respuesta").html(datos);
            }
        });
    });
    });
</script>
</body>
<?php //include 'includes/fb.php'; ?>
</html>