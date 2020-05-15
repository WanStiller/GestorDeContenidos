<?php
include 'includes/config.php' ;
$here="Hoja de Vida"; ?>


<?php //Muestra datos de usuario
  if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){/**/} else {require("includes/datos_usuario.php");}
?>



<?php require_once 'includes/special.php'; ?>



<body>





<?php include('includes/header.php');?>
<div class="container" style="border-right: 5px solid gray;border-radius: 0px!important;background: #f2f2f2;margin-bottom: 1.5em;-webkit-box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0); 
box-shadow: 0px 10px 13px -7px #000000, 5px 5px 15px 5px rgba(0,0,0,0);background: white">
<?php 
$pagetype='contactus';
$query=mysqli_query($con,"select PageTitle,Description, Vistas, UpdationDate from tblpages where PageName='$pagetype'");

$query2=mysqli_query($con,"Update tblpages set Vistas=Vistas+1 where PageName='$pagetype'");



while($row=mysqli_fetch_array($query))
{
?>
<h2 class="card-title articulotitulo" style="padding-top: 0.5em"><?php echo htmlentities($row['PageTitle'])?>
</h2>
<p><cite style="opacity: 0.7;font-size: 0.8em">Hoja de Vida actualizada el <?php echo $row['UpdationDate'];?></cite><h3 class="card-title articulotitulo" style="line-height: 10px">Vistas <?php echo $row['Vistas'];?></h3></p>
<hr style="border:1px dashed;opacity: 0.5">

<div class="row">

<?php echo $row['Description'];?>



	<style type="text/css">

.container-skillbar {
		width:100%;
		padding-top:30px;
		height:auto;
		overflow:none;
	}
	.skillbar {
		position:relative;
		display:block;
		margin-bottom:15px;
		width:100%;
		background:#efefef;
		height:30px;
		border-radius:3px;
		-moz-border-radius:3px;
		-webkit-border-radius:3px;
		-webkit-transition:0.4s linear;
		-moz-transition:0.4s linear;
		-ms-transition:0.4s linear;
		-o-transition:0.4s linear;
		transition:0.4s linear;
		-webkit-transition-property:width, background-color;
		-moz-transition-property:width, background-color;
		-ms-transition-property:width, background-color;
		-o-transition-property:width, background-color;
		transition-property:width, background-color;
	}

	.skillbar-title {
		position:absolute;
		top:0;
		left:0;
		width:110px;
		/*font-weight:bold;*/
		font-size:13px;
		color:#fff;
		background:#6adcfa;
		-webkit-border-top-left-radius:3px;
		-webkit-border-bottom-left-radius:4px;
		-moz-border-radius-topleft:3px;
		-moz-border-radius-bottomleft:3px;
		border-top-left-radius:3px;
		border-bottom-left-radius:3px;
	}

	.skillbar-title span {
		display:block;
		background:rgba(0, 0, 0, 0.15);
		padding:0 20px;
		height:30px;
		line-height:30px;
		-webkit-border-top-left-radius:3px;
		-webkit-border-bottom-left-radius:3px;
		-moz-border-radius-topleft:3px;
		-moz-border-radius-bottomleft:3px;
		border-top-left-radius:3px;
		border-bottom-left-radius:3px;
	}

	.skillbar-bar {
		height:30px;
		width:0px;
		border-radius:3px;
		-moz-border-radius:3px;
		-webkit-border-radius:3px;
	}

	.skill-bar-percent {
		position:absolute;
		right:10px;
		top:0;
		font-size:11px;
		height:30px;
		line-height:30px;
		color:#ffffff;
		color:rgba(0, 0, 0, 0.5);
	}
</style>



<div class="container-skillbar container-fluid">
	<div class="skillbar clearfix " data-percent="100%">
		<div class="skillbar-title" style="background: #DD1E2F;"><span>HTML5</span></div>
		<div class="skillbar-bar" style="background: #DD1E2F;"></div>
		<div class="skill-bar-percent">100%</div>
	</div> <!-- Ende Skill Bar -->

	<div class="skillbar clearfix " data-percent="100%">
		<div class="skillbar-title" style="background: #EBB035;"><span>CSS3</span></div>
		<div class="skillbar-bar" style="background: #EBB035;"></div>
		<div class="skill-bar-percent">100%</div>
	</div> <!-- Ende Skill Bar -->

	<div class="skillbar clearfix " data-percent="60%">
		<div class="skillbar-title" style="background: #06A2CB;"><span>jQuery</span></div>
		<div class="skillbar-bar" style="background: #06A2CB;"></div>
		<div class="skill-bar-percent">60%</div>
	</div> <!-- Ende Skill Bar -->

		<div class="skillbar clearfix " data-percent="100%">
		<div class="skillbar-title" style="background: #192823;"><span>Bootstrap</span></div>
		<div class="skillbar-bar" style="background: #454545;"></div>
		<div class="skill-bar-percent">100%</div>
	</div> <!-- Ende Skill Bar -->


	<div class="skillbar clearfix " data-percent="80%">
		<div class="skillbar-title" style="background: #218559;"><span>Photoshop</span></div>
		<div class="skillbar-bar" style="background: #218559;"></div>
		<div class="skill-bar-percent">80%</div>
	</div> <!-- Ende Skill Bar -->

	<div class="skillbar clearfix " data-percent="85%">
		<div class="skillbar-title" style="background: #D0C6B1;"><span>PHP Nativo</span></div>
		<div class="skillbar-bar" style="background: #D0C6B1;"></div>
		<div class="skill-bar-percent">85%</div>
	</div> <!-- Ende Skill Bar -->


<div class="skillbar clearfix " data-percent="83%">
		<div class="skillbar-title" style="background: #06A2CB;"><span>SQL</span></div>
		<div class="skillbar-bar" style="background: #06A2CB;"></div>
		<div class="skill-bar-percent">83%</div>
	</div> <!-- Ende Skill Bar -->



		<div class="skillbar clearfix " data-percent="80%">
		<div class="skillbar-title" style="background: #ff6600;"><span>Laravel</span></div>
		<div class="skillbar-bar" style="background: #ff6600;"></div>
		<div class="skill-bar-percent">80%</div>
	</div> <!-- Ende Skill Bar -->


			<div class="skillbar clearfix " data-percent="40%">
		<div class="skillbar-title" style="background: blue;"><span>Wordpress</span></div>
		<div class="skillbar-bar" style="background: blue;"></div>
		<div class="skill-bar-percent">40%</div>
	</div> <!-- Ende Skill Bar -->









</div><!-- Ende container Skill Bar -->


<span style="margin: 2em"></span>
</div>

<div>
<div id="disqus_thread"></div>
<script>


/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://codigo-fuente.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
</div>


<?php } ?>
</div>
<?php include('includes/footer.php');?>





<script src="vendor/bootstrap/js/jquery-3.4.1.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="odometer-master/odometer.min.js"></script>
<script src="vendor/bootstrap/js/up.js"></script>
<?php require_once('includes/submenu.php');?>
<script  src="script.js"></script>


</body>
<?php //include 'includes/fb.php'; ?>
</html>
