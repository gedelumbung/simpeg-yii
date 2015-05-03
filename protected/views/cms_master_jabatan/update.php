<?php
/* @var $this Cms_master_jabatanController */
/* @var $model Jabatan */

$this->breadcrumbs=array(
	'Jabatan'=>array('index'),
	$model->id_jabatan=>array('view','id'=>$model->id_jabatan),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Jabatan', 'url'=>array('index')),
	array('label'=>'Tambah Jabatan', 'url'=>array('create')),
	array('label'=>'Detail Jabatan', 'url'=>array('view', 'id'=>$model->id_jabatan)),
);
?>

<h3>Update Jabatan <?php echo $model->id_jabatan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>