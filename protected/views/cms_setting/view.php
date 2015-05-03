<?php
/* @var $this Cms_settingController */
/* @var $model Setting */

$this->breadcrumbs=array(
	'Setting'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Data Setting', 'url'=>array('index')),
	array('label'=>'Edit Setting', 'url'=>array('update', 'id'=>$model->id_setting)),
);
?>

<h3>View Setting #<?php echo $model->id_setting; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_setting',
		'tipe',
		'title',
		'content_setting',
	),
)); ?>

</div>
</div>
