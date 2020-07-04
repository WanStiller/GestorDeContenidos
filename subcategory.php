<?php 
session_start();
error_reporting(0);
$here= "SubCategory";
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
<div class="row">
	<?php 
if($_GET['catid']!=''){
$_SESSION['catid']=intval($_GET['catid']);
}
if (isset($_GET['pageno'])) {
$pageno = $_GET['pageno'];
} else {
$pageno = 1;
}
$no_of_records_per_page = 20;
$offset = ($pageno-1) * $no_of_records_per_page;
$total_pages_sql = "SELECT COUNT(*) FROM tblposts";
$result = mysqli_query($con,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.Views as views,tblposts.Description as description,tblposts.PostImage,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.SubCategoryId='".$_SESSION['catid']."' and tblposts.Is_Active=1 order by tblposts.id desc LIMIT $offset, $no_of_records_per_page");

$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
echo "<div class='col-md-9' style='margin-bottom: 1.5em'>
	<div class='card row'>
		Sin Resultados</div></div>
";
}
else {
while ($row=mysqli_fetch_array($query)) {
?>



<div class="col-md-6" style="margin-bottom: 1.5em">
	<div class="card">
		<a href="article.php?nid=<?php echo htmlentities($row['pid'])?>">
		<div style="background-image: url(admin/postimages/<?php echo htmlentities($row['PostImage']);?>);width: 100%;height:0;padding-top:50%; background-position: 50% 50%; background-size: cover;position: relative;">
			<span class="cuadrito"><?php echo htmlentities($row['category']);?></span>
		</div>
		</a>
<div style="text-align: center;padding: 0.5em">
<h5 class="articulotitulo"><?php echo htmlentities($row['posttitle']);?></h5>
<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="border: 0;background: transparent;text-align: center;overflow: hidden;resize: none;" disabled="true"><?php echo htmlentities($row['description']);?></textarea>
<!--<p style="font-size: 0.8em"><a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a></p>-->
<a href="article.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-info btn-sm" style="margin-bottom: 0.5em">Leer M&aacute;s</a>
</div>
<div class="card-footer text-muted" style="font-size: 0.8em;text-align: center;">
Publicado el <?php echo htmlentities($row['postingdate']);?> <b>Visitas</b> <?php echo htmlentities($row['views']);?>
</div>
</div>
</div>




<?php } ?>

</div>


<ul class="pagination justify-content-center mb-4">
<li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
<li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
<a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
</li>
<li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
<a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
</li>
<li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
</ul>
<?php } ?>
</div>
<div class="col-md-3">
<?php include('includes/sidebar.php');?>
</div>
</div>
</div>
<?php include('includes/footer.php');?>
<script src="vendor/bootstrap/js/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/bootstrap/js/up.js"></script>

<?php require_once('includes/submenu.php');?>
</body>
<?php //include 'includes/fb.php'; ?>
</html>