<?php
/* @var $this Cms_master_golonganController */
/* @var $model Golongan */

$this->breadcrumbs=array(
	'Golongan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Golongan', 'url'=>array('index')),
);
?>

<h3>Create Golongan</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>