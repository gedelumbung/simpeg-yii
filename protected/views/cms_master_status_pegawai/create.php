<?php
/* @var $this Cms_master_status_pegawaiController */
/* @var $model StatusPegawai */

$this->breadcrumbs=array(
	'Status Pegawai'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Status Pegawai', 'url'=>array('index')),
);
?>

<h3>Create Status Pegawai</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>