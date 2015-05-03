<?php
/* @var $this Cms_master_status_pegawaiController */
/* @var $model StatusPegawai */

$this->breadcrumbs=array(
	'Status Pegawai'=>array('index'),
	$model->id_status_pegawai=>array('view','id'=>$model->id_status_pegawai),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Status Pegawai', 'url'=>array('index')),
	array('label'=>'Tambah Status Pegawai', 'url'=>array('create')),
	array('label'=>'Detail Status Pegawai', 'url'=>array('view', 'id'=>$model->id_status_pegawai)),
);
?>

<h3>Update Status Pegawai <?php echo $model->id_status_pegawai; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>