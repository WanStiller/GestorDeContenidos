<h1 class="card-title articulotitulo"><?php echo htmlentities($row['posttitle']);?></h1>
<p style="font-size: 0.8em"><b>Categor&iacute;a : </b> <?php echo htmlentities($row['category']);?> <!--<a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"></a>--> |
<b>Sub Categor&iacute;a : </b><?php echo htmlentities($row['subcategory']);?><br>
<b> Posteado el </b><?php echo htmlentities($row['postingdate']);?> | <span style="opacity: 0.6">Escrito por <?php echo ($row['autor']);?></span>
|

<?php echo htmlentities($row['views']);?> lecturas


</p>
<hr style="border:1px dashed;opacity: 0.5">
<!--<img class="img-fluid rounded" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">-->
<p class="card-text"><?php $pt=$row['postdetails']; echo  (substr($pt,0));?></p>
</div>
<!--
<div class="card my-4">
<h6 class="card-header bg-dark">Publicar un comentario:</h6>
<div class="card-body">
<form name="Comment" method="post">
<input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
<div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Ingrese su nombre" required>
</div>
<div class="form-group">
<input type="email" name="email" class="form-control" placeholder="ingrese su direcci&oacute;n de Email" required>
</div>
<div class="form-group">
<textarea class="form-control" name="comment" rows="3" placeholder="Comentario" required></textarea>
</div>
<button type="submit" class="btn btn-primary" name="submit">Postear</button>
</form>
</div>
</div>
-->

<div style="padding: 1em">
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

<?php 
$sts=1;
$query=mysqli_query($con,"select name,comment,postingDate from  tblcomments where postId='$pid' and status='$sts'");
while ($row=mysqli_fetch_array($query)) {
?>
<div class="media mb-4">
<img class="d-flex mr-3 rounded-circle" src="images/usericon.png" alt="icon" style="margin-left: 1em;">
<div class="media-body">
<h5 class="mt-0"><?php echo htmlentities($row['name']);?> <br />
<span style="font-size:11px;"><b>at</b> <?php echo htmlentities($row['postingDate']);?></span>
</h5>
<?php echo htmlentities($row['comment']);?>            </div>
</div>
<?php } ?>