<?php 
session_start();
error_reporting(0);
$here= "Category";
include('includes/config.php');
?>


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
<div class="col-md-9">

<?php
    if($_GET['subCategoria']!=''){
    $_SESSION['subCategoria']=intval($_GET['subCategoria']);
    }
    $query=mysqli_query($con,"SELECT * from tblcategory WHERE id='".$_SESSION['subCategoria']."'");
    while ($row=mysqli_fetch_array($query)) {
    $CategoryName = $row['CategoryName'];
    $Description = $row['Description'];
    }
    ?>
    <!--<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Portada</a></li>
    <li class="breadcrumb-item"><a href="#"><?php echo $CategoryName; ;?></a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>-->
    <!--<h5>Variable curso <?php //echo $_SESSION['subCategoria'] ;?></h5>-->
    
    
    <div class="alert alert-info alert-dismissible fade show" role="alert" style="margin-bottom: 1.5em">
        <?php echo $Description;?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    <?php
    /*if($_GET['subCategoria']!=''){
    $_SESSION['subCategoria']=intval($_GET['subCategoria']);
    }
    $query=mysqli_query($con,"SELECT * from tblcategory WHERE id='".$_SESSION['subCategoria']."'");
    while ($row=mysqli_fetch_array($query)) {
    $CategoryName = $row['CategoryName'];
    echo $CategoryName."</br>";
    }*/
    ?>
    </div>


 <div class="row">
     
         <?php
    //Datos get traidos de cursos.php | Variable de tipo GET
    if($_GET['subCategoria']!=''){
     $_SESSION['subCategoria']=intval($_GET['subCategoria']);
     //echo $_SESSION['subCategoria'];
    }
    $query=mysqli_query($con,"SELECT * from tblsubcategory WHERE CategoryId='".$_SESSION['subCategoria']."'");
    while ($row=mysqli_fetch_array($query)) {
        $name = $row['CategoryId'];
        $cid = $row['CategoryId'];
        $PostImage = $row['PostImage'];
        $PostingDate = $row['PostingDate'];
        $Desc = $row['SubCatDescription'];
        $CategoryName = $row['CategoryName'];
        ?>

        <div class="col-md-6" style="margin-bottom: 1.5em">

    <div class="card">
        <a href="subcategory.php?catid=<?php echo htmlentities($row['SubCategoryId'])?>">
        <div style="background-image: url(images/<?php echo htmlentities($row['PostImage']);?>);width: 100%;height:0;padding-top:50%; background-position: 50% 50%; background-size: cover;position: relative;"></div>
        </a>
<div style="text-align: center;padding: 0.5em">
<h5 class="articulotitulo"><?php echo htmlentities($row['Subcategory']);?></h5>
<p style="font-size: 0.9em"><?php //echo htmlentities($row['SubCatDescription']);?>
     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="border: 0;background: transparent;text-align: center;overflow: hidden;resize: none;" disabled="true"><?php echo htmlentities($row['SubCatDescription']);?></textarea>
</p>
<a href="subcategory.php?catid=<?php echo htmlentities($row['SubCategoryId'])?>" class="btn btn-info btn-sm" style="margin-bottom: 0.5em">Leer M&aacute;s</a>
</div>
<div class="card-footer text-muted" style="font-size: 0.8em;text-align: center;">
Publicado el <?php echo htmlentities($row['PostingDate']);?>
</div>
</div>
</div>

<?php
    }
?>
 </div>

</div>
<div class="col-md-3">
<?php include('includes/sidebar.php');?>
</div></div>
</div>
<?php include('includes/footer.php');?>
<script src="vendor/bootstrap/js/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/bootstrap/js/up.js"></script>

<?php require_once('includes/submenu.php');?>
</body>
<?php //include 'includes/fb.php'; ?>
</html>