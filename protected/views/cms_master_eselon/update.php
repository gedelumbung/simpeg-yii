<?php
/* @var $this Cms_master_eselonController */
/* @var $model Eselon */

$this->breadcrumbs=array(
	'Eselon'=>array('index'),
	$model->id_eselon=>array('view','id'=>$model->id_eselon),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Eselon', 'url'=>array('index')),
	array('label'=>'Tambah Eselon', 'url'=>array('create')),
	array('label'=>'Detail Eselon', 'url'=>array('view', 'id'=>$model->id_eselon)),
);
?>

<h3>Update Eselon <?php echo $model->id_eselon; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>