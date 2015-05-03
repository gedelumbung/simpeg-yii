<?php
/* @var $this Cms_master_golonganController */
/* @var $model Golongan */

$this->breadcrumbs=array(
	'Golongan'=>array('index'),
	$model->id_golongan=>array('view','id'=>$model->id_golongan),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Golongan', 'url'=>array('index')),
	array('label'=>'Tambah Golongan', 'url'=>array('create')),
	array('label'=>'Detail Golongan', 'url'=>array('view', 'id'=>$model->id_golongan)),
);
?>

<h3>Update Golongan <?php echo $model->id_golongan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>