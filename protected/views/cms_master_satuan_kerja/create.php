<?php
/* @var $this Cms_master_satuan_kerjaController */
/* @var $model SatuanKerja */

$this->breadcrumbs=array(
	'Satuan Kerja'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Satuan Kerja', 'url'=>array('index')),
);
?>

<h3>Create Satuan Kerja</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>