<?php
/* @var $this Cms_pegawaiController */
/* @var $model Pegawai */

$this->breadcrumbs=array(
	'Pegawai'=>array('index'),
	$model->id_pegawai=>array('view','id'=>$model->id_pegawai),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Pegawai', 'url'=>array('index')),
	array('label'=>'Tambah Pegawai', 'url'=>array('create')),
	array('label'=>'Detail Pegawai', 'url'=>array('view', 'id'=>$model->id_pegawai)),
);
?>

<h3>Update Pegawai <?php echo $model->id_pegawai; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>