

<nav class="navbar navbar-expand-lg navbar-dark bg-dark"  style="margin-bottom: 1.5em;border-bottom: 5px solid #4f5b93;">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" style="width: 100%;max-width: 150px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="profile.php">
                  <div style="background-image: url(images/profiles/<?php echo $profile_pic ?>);width: 40px;height: 40px;border-radius: 50%; background-position: 50% 50%; background-size: cover;margin-top: -10px;text-align: center;float: right; position: initial; margin-right: 0px;margin-left: 10px;"></div>
                  <?php echo $fullname; ?></a>
            </li>
   <li class="nav-item active">
                <a class="nav-link" href="action/logout.php">Salir</a>
            </li>


                 <li class="nav-item active">
                <a class="nav-link" href="hoja-de-vida.php"  style="color: yellow">MI <b>HOJA DE VIDA</b> <span class="icon icon-attachment"></span></a>
            </li>
        </ul>
    </div>
</nav>


<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '3b967795bd44a5c351aeea54c5e67ea98579daef';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>