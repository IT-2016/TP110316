<nav class="navbar navbar-fixed-top navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><?php echo $appTitre;?></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
    <?php if(isset($menuData) && !empty($menuData)){ ?>
      <ul class="nav navbar-nav">
      	<?php foreach ($menuData as $key => $value) {
      		echo sprintf('<li><a href="%s">%s</a></li>', $value['url'], $value['label']);
      	}
      	?>
      </ul>
    <?php } ?>
    </div><!-- /.nav-collapse -->
  </div><!-- /.container -->
</nav><!-- /.navbar -->