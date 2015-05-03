<?php
/* @var $this Cms_master_lokasi_kerjaController */
/* @var $model LokasiKerja */

$this->breadcrumbs=array(
	'Lokasi Kerja'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Lokasi Kerja', 'url'=>array('index')),
);
?>

<h3>Create Lokasi Kerja</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>