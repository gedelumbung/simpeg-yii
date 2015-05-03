<?php
/* @var $this Cms_master_lokasi_kerjaController */
/* @var $model LokasiKerja */

$this->breadcrumbs=array(
	'Lokasi Kerja'=>array('index'),
	$model->id_lokasi_kerja=>array('view','id'=>$model->id_lokasi_kerja),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Lokasi Kerja', 'url'=>array('index')),
	array('label'=>'Tambah Lokasi Kerja', 'url'=>array('create')),
	array('label'=>'Detail Lokasi Kerja', 'url'=>array('view', 'id'=>$model->id_lokasi_kerja)),
);
?>

<h3>Update Lokasi Kerja <?php echo $model->id_lokasi_kerja; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>