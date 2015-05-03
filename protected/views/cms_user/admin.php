<div class="well">
    <div class="row">
    <div class="span">
      <h3><?php echo $GLOBALS['site_title']; ?></h3>
      <p><?php echo $GLOBALS['site_quotes']; ?></p>
    </div>
    </div>
  </div>

  <div class="well">
  <div class="navbar navbar-inverse">
    <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="#">Manage Users</a>
      <div class="nav-collapse">
      <ul class="nav">
        <li><a href="<?php echo Yii::app()->baseUrl; ?>/cms_user/create"><i class="icon-plus-sign icon-white"></i> Add New</a></li>
      </ul>
      </div>
    <div class="span6 pull-right">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
    </div>
    </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
  
    <section>
<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-cms-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-cms-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
    'pager' => array('cssFile' => Yii::app()->theme->baseUrl.'/css/gridView.css'),
	'columns'=>array(
	     array(
	      'header'=>'No',
	      'type'=>'raw',
	      'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1'
	      ),
		'username',
		'nama',
		'email',
		array(
			'header'=>'Actions',
			'class'=>'CButtonColumn',
		),
	),
)); ?>
    </section>
</div>
