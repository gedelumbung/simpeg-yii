<?php
/* @var $this Cms_master_lokasi_pelatihanController */
/* @var $model LokasiPelatihan */

$this->breadcrumbs=array(
	'Lokasi Pelatihan'=>array('index'),
	$model->id_lokasi_pelatihan=>array('view','id'=>$model->id_lokasi_pelatihan),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Lokasi Pelatihan', 'url'=>array('index')),
	array('label'=>'Tambah Lokasi Pelatihan', 'url'=>array('create')),
	array('label'=>'Detail Lokasi Pelatihan', 'url'=>array('view', 'id'=>$model->id_lokasi_pelatihan)),
);
?>

<h3>Update Lokasi Pelatihan <?php echo $model->id_lokasi_pelatihan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>