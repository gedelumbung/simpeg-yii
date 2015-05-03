<div class="hero-unit">
	<h2>Welcome to, <?php echo $_SESSION['site_title']; ?></h2>
	<?php echo $_SESSION['site_welcome']; ?>
	<p><a class="btn btn-primary btn-large" href="<?php echo Yii::app()->baseUrl; ?>/login">Administrator Login <i class="icon-circle-arrow-right icon-white"></i> </a></p>
</div>
