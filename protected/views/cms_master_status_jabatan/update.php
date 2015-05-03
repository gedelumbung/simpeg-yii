<?php
/* @var $this Cms_master_status_jabatanController */
/* @var $model StatusJabatan */

$this->breadcrumbs=array(
	'Status Jabatan'=>array('index'),
	$model->id_status_jabatan=>array('view','id'=>$model->id_status_jabatan),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Status Jabatan', 'url'=>array('index')),
	array('label'=>'Tambah Status Jabatan', 'url'=>array('create')),
	array('label'=>'Detail Status Jabatan', 'url'=>array('view', 'id'=>$model->id_status_jabatan)),
);
?>

<h3>Update Status Jabatan <?php echo $model->id_status_jabatan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>