<?php 
session_start();
error_reporting(0);
$here= "Resultados de busqueda";
include 'includes/config.php';
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
<div class="row">
<div class="col-md-9">
<?php 
if($_POST['searchtitle']!=''){
$st=$_SESSION['searchtitle']=$_POST['searchtitle'];
}
$st;
if (isset($_GET['pageno'])) {
$pageno = $_GET['pageno'];
} else {
$pageno = 1;
}
$no_of_records_per_page = 50;
$offset = ($pageno-1) * $no_of_records_per_page;
$total_pages_sql = "SELECT COUNT(*) FROM tblposts";
$result = mysqli_query($con,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.Description as description,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.PostTitle like '%$st%' and tblposts.Is_Active=1 LIMIT $offset, $no_of_records_per_page");
$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
echo "<div class='alert alert-dark' role='alert'>Sin resultados ... </div>";
}
else {
while ($row=mysqli_fetch_array($query)) {
?>
<div class="card mb-4">
<div class="card-body">

<h4 class="card-title"><?php echo htmlentities($row['posttitle']);?></h4>
<p style="font-size: 0.9em"><?php echo htmlentities($row['description']);?></p>
<a href="article.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary btn-sm">Ampliar Contenido</a>
</div>
<div class="card-footer text-muted" style="font-size: 0.8em;">
Publicado el <?php echo htmlentities($row['postingdate']);?>
</div>
</div>
<?php } ?>
<!--<ul class="pagination justify-content-center mb-4">
<li class="page-item"><a href="?pageno=1"  class="page-link">Primero</a></li>
<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
<a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Ant.</a>
</li>
<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
<a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Sig.</a>
</li>
<li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">&Uacute;ltimo</a></li>
</ul>-->
<?php } ?>
</div>
<div class="col-md-3">
<?php include 'includes/sidebar.php' ;?>
</div>
</div>
</div>
<?php include 'includes/footer.php' ;?>
<script src="vendor/bootstrap/js/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/bootstrap/js/up.js"></script>

<?php require_once('includes/submenu.php');?>
</body>
<?php //include 'includes/fb.php'; ?>
</html>