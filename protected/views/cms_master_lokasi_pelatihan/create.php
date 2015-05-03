<?php
/* @var $this Cms_master_lokasi_pelatihanController */
/* @var $model LokasiPelatihan */

$this->breadcrumbs=array(
	'Lokasi Pelatihan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Lokasi Pelatihan', 'url'=>array('index')),
);
?>

<h3>Create Lokasi Pelatihan</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>