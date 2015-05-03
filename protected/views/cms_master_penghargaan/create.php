<?php
/* @var $this Cms_master_penghargaanController */
/* @var $model Penghargaan */

$this->breadcrumbs=array(
	'Penghargaan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Penghargaan', 'url'=>array('index')),
);
?>

<h3>Create Penghargaan</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>