<?php
/* @var $this Cms_master_satuan_kerjaController */
/* @var $model SatuanKerja */

$this->breadcrumbs=array(
	'Satuan Kerja'=>array('index'),
	$model->id_satuan_kerja=>array('view','id'=>$model->id_satuan_kerja),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Satuan Kerja', 'url'=>array('index')),
	array('label'=>'Tambah Satuan Kerja', 'url'=>array('create')),
	array('label'=>'Detail Satuan Kerja', 'url'=>array('view', 'id'=>$model->id_satuan_kerja)),
);
?>

<h3>Update Satuan Kerja <?php echo $model->id_satuan_kerja; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>