<?php
/* @var $this Cms_pegawaiController */
/* @var $model Pegawai */

$this->breadcrumbs=array(
	'Pegawai'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Pegawai', 'url'=>array('index')),
);
?>

<h3>Create Pegawai</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>