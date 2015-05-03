<?php
/* @var $this Cms_master_penghargaanController */
/* @var $model Penghargaan */

$this->breadcrumbs=array(
	'Penghargaan'=>array('index'),
	$model->id_penghargaan=>array('view','id'=>$model->id_penghargaan),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Penghargaan', 'url'=>array('index')),
	array('label'=>'Tambah Penghargaan', 'url'=>array('create')),
	array('label'=>'Detail Penghargaan', 'url'=>array('view', 'id'=>$model->id_penghargaan)),
);
?>

<h3>Update Penghargaan <?php echo $model->id_penghargaan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>