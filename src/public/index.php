<?php require_once '../application/data.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Off Canvas Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">
  </head>
  <body>
    <?php require_once '../application/partials/menu.php';?>
    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <?php require_once '../application/jumbotron.php';?>
          <?php require_once '../application/panel.php';?>
        </div><!--/.col-xs-12.col-sm-9-->
        <?php require_once '../application/partials/sidebar.php';?>
      </div><!--/row-->
      <hr>
      <?php require_once '../application/partials/footer.php';?>
    </div><!--/.container-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
