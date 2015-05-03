<?php
/* @var $this Cms_master_pelatihanController */
/* @var $model Pelatihan */

$this->breadcrumbs=array(
	'Pelatihan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Pelatihan', 'url'=>array('index')),
);
?>

<h3>Create Pelatihan</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>