
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $_SESSION['site_title']; ?> - Supporting Ticket</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/docs.css" rel="stylesheet">

    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/application.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap-tooltip.js"></script>
    <script type="text/javascript">
      $(window).load(function() { $("#loading").fadeOut("slow"); })
    </script>
  </head>
  
  <body>

  <div id="loading"></div>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo Yii::app()->baseUrl; ?>/"><?php echo $_SESSION['site_title']; ?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/"><i class="icon-home icon-white"></i> Home</a></li>
              <?php if(Yii::app()->user->isGuest){ ?>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/site/login"><i class="icon-refresh icon-white"></i> Log In</a></li>
              <?php } else { ?>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms"><i class="icon-globe icon-white"></i> CMS Panel</a></li>
              <li><a href="<?php echo Yii::app()->baseUrl; ?>/site/logout"><i class="icon-remove-sign icon-white"></i> Log Out</a></li>
              <?php } ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	
    <div class="container">
	   
      <?php echo $content; ?>


      <footer class="well">
        <p><?php echo $_SESSION['site_footer']; ?></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
