<?php
/* @var $this Cms_master_ppkController */
/* @var $model Ppk */

$this->breadcrumbs=array(
	'Ppk'=>array('index'),
	$model->id_ppk=>array('view','id'=>$model->id_ppk),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Ppk', 'url'=>array('index')),
	array('label'=>'Tambah Ppk', 'url'=>array('create')),
	array('label'=>'Detail Ppk', 'url'=>array('view', 'id'=>$model->id_ppk)),
);
?>

<h3>Update Ppk <?php echo $model->id_ppk; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>