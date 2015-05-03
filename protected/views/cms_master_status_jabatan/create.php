<?php
/* @var $this Cms_master_status_jabatanController */
/* @var $model StatusJabatan */

$this->breadcrumbs=array(
	'Status Jabatan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Status Jabatan', 'url'=>array('index')),
);
?>

<h3>Create Status Jabatan</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>