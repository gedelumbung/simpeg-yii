<?php
/* @var $this Cms_pegawaiController */
/* @var $model Pegawai */

$this->breadcrumbs=array(
	'Pegawai'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Data Pegawai', 'url'=>array('index')),
	array('label'=>'Tambah Pegawai', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pegawai-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h3>Data Pegawai</h3>



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
<?php echo CHtml::link('<i class=\'icon icon-white icon-search\'></i> Advanced Search','#',array('class'=>'search-button btn btn-sm btn-primary')); ?></div>
</div>
<div class="portlet-content">

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
	'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
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

</div></div>
