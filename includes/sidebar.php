  <form name="search" action="search.php" method="post">
<div class="input-group mb-3">

  <input type="search" class="form-control" placeholder="Buscar ..." aria-label="Search" aria-describedby="basic-addon1" name="searchtitle" style="border-radius: 0px!important">
  <div class="input-group-prepend">
    <button class="btn btn-success" type="submit"><img src="images/lupa.png" style="width: 16px; height: auto;"></button>
  </div>

</div>
    </form>







<div class="card" style="margin-bottom: 1em">
<h6 class="card-header bg-dark" style="color: #fff; font-weight: normal;border-bottom: 5px solid #4f5b93">Categor&iacute;as</h6>
<div class="list-group">
    <?php
    $query=mysqli_query($con,"SELECT * from tblcategory");
    while ($row=mysqli_fetch_array($query)) {
        $name = $row['CategoryName'];
        $cid = $row['id'];
        ?>
<a href="category.php?subCategoria=<?php echo htmlentities($row['id'])?>" class="list-group-item list-group-item-action list-group-item-light"><?php echo htmlentities($row['CategoryName']);?></a>
<?php } ?>
</div>
</div>


<div class="card" style="margin-bottom: 1em">
<h6 class="card-header bg-dark" style="color: #fff; font-weight: normal;border-bottom: 5px solid #4f5b93">Contenido Reciente</h6>
<div class="list-group">
<?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId order by tblposts.id desc limit 12");
while ($row=mysqli_fetch_array($query)) {
?>
<a href="article.php?nid=<?php
echo htmlentities($row['pid'])?>" class="list-group-item list-group-item-action list-group-item-light"><?php echo htmlentities($row['posttitle']);?></a>
<?php } ?>
</div>
</div>



<div class="card" style="margin-bottom: 1em">
<h6 class="card-header bg-dark" style="color: #fff; font-weight: normal;border-bottom: 5px solid #4f5b93">Top 10</h6>
<div class="list-group">
<?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.Views as views ,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId order by tblposts.views desc limit 10");
while ($row=mysqli_fetch_array($query)) {
?>
<a href="article.php?nid=<?php
echo htmlentities($row['pid'])?>" class="list-group-item list-group-item-action list-group-item-light"><?php echo htmlentities($row['posttitle']);?></a>
<?php } ?>
</div>
</div>


<div style="text-align: center;margin-top: 2em">
  <script src="https://apis.google.com/js/platform.js"></script>
<div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="full" data-count="default"></div>
</div>



<!-- Facebook -->
<!--<div id="container" style="width:100%;" class="fb-page" data-href="https://www.facebook.com/facebook/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook/">facebook</a></blockquote></div>-->
<!-- End facebook -->