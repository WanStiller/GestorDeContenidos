<?php 
session_start();
include('includes/config.php');



if (empty($_SESSION['token'])) {
$_SESSION['token'] = bin2hex(random_bytes(32));
}
if(isset($_POST['submit']))
{
if (!empty($_POST['csrftoken'])) {
if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$postid=intval($_GET['nid']);
$st1='0';
$query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");








if($query):
echo "<script>alert('Comentario enviado exitosamente; está siendo revisado por nuestro equipo de soporte para aprobar su publicación en el sitio. ');</script>";
unset($_SESSION['token']);
else :
echo "<script>alert('Error. Intentar nuevamente.');</script>";  
endif;
}
}
}
?>


<?php //Muestra datos de usuario
  if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){/**/} else {require("includes/datos_usuario.php");}
?>



<?php
$pid=intval($_GET['nid']);
$query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.Autor as autor,tblposts.Views as views,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
$query2=mysqli_query($con,"Update tblposts set views=views+1 where id=$pid");
while ($row=mysqli_fetch_array($query)) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="<?php echo htmlentities($row['posttitle']);?>" name="description">
<meta content="Joel Garc&iacute;a" name="author">
<title><?php echo htmlentities($row['posttitle']);?></title>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png">
<link rel="stylesheet" href="prism/prism.css">
<link rel="stylesheet" type="text/css" href="vendor/IcoMoon-Free-master/Font/demo-files/demo.css">
<meta property="og:image" content="admin/postimages/<?php echo htmlentities($row['PostImage']);?>">
</head>
<body>



<?php //require('includes/header.php'); ESTA LINEA ESTABLECE EL MENU SI ES LOGIN O NO
	if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){include("includes/header.php");} else {require("includes/header-log.php");}
?>



<div class="container">
<div class="row">
<div class="col-md-9">



	<div style="background-image: url(admin/postimages/<?php echo htmlentities($row['PostImage']);?>);width: 100%;height:0;padding-top:25%; background-position: 50% 50%; background-size: cover;position: relative;" class="alert alert-dismissible fade show" role="alert">
		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
	</div>







<div style="border-right: 5px solid gray;border-radius: 0px!important;background: #f2f2f2;margin-bottom: 1.5em;-webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);">
<div class="card-body">




<?php //require('includes/header.php'); ESTA LINEA ESTABLECE EL MENU SI ES LOGIN O NO
	if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){include("includes/article.php");} else {require("includes/article-no.php");}
?>





</div>

<?php } ?>
</div>
<!-- Sidebar Widgets Column -->
<div class="col-md-3">

<div style="box-sizing: border-box;">
	<a href="http://www.facebook.com/sharer.php?u=" target="_blank">
	<div style="display: inline-block;color: white;font-size: 2.5em;position: relative; width: 33.3%;height:0;padding-top:33.3%;float: left;background: #3b5998 ">
		<span class="icon icon-facebook" style="top: 30%;position: absolute;left: 31%"></span>
	</div>
	</a>
	<a href="http://www.twitter.com/share?url=" target="_blank">
	<div style="display: inline-block;color: white;font-size: 2.5em;position: relative; width: 33.3%;height:0;padding-top:33.3%;float: left;background: #00acee">
		<span class="icon icon-twitter" style="top: 30%;position: absolute;left: 31%"></span>
	</div>
	</a>
	<a href="whatsapp://send?text=" target="_blank">
	<div style="display: inline-block;color: white;font-size: 2.5em;position: relative; width: 33.3%;height:0;padding-top:33.3%;float: left;background: #25D366">
		<span class="icon icon-whatsapp" style="top: 30%;position: absolute;left: 31%"></span>
	</div>
	</a>
</div>
<div style="margin-bottom: 1em;font-size: 0.7em;text-align: center;">Comparte este contenido en tus redes sociales</div>



<?php include('includes/sidebar.php');?>
</div>
</div>
</div>
<?php require('includes/footer.php');?>
<script src="vendor/bootstrap/js/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="prism/prism.js"></script>
<script src="vendor/bootstrap/js/up.js"></script>
<?php require_once('includes/submenu.php');?>
</body>
<?php //include 'includes/fb.php'; ?>
</html>