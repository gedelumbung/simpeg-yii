<?php
/* @var $this Cms_master_jabatanController */
/* @var $model Jabatan */

$this->breadcrumbs=array(
	'Jabatan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Jabatan', 'url'=>array('index')),
);
?>

<h3>Create Jabatan</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>