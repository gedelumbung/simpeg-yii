<?php
/* @var $this Cms_settingController */
/* @var $model Setting */

$this->breadcrumbs=array(
	'Setting'=>array('index'),
	$model->title=>array('view','id'=>$model->id_setting),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Setting', 'url'=>array('index')),
	array('label'=>'Detail Setting', 'url'=>array('view', 'id'=>$model->id_setting)),
);
?>

<h3>Update Setting <?php echo $model->id_setting; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>