<?php
/* @var $this Cms_master_pelatihanController */
/* @var $model Pelatihan */

$this->breadcrumbs=array(
	'Pelatihan'=>array('index'),
	$model->id_pelatihan=>array('view','id'=>$model->id_pelatihan),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Pelatihan', 'url'=>array('index')),
	array('label'=>'Tambah Pelatihan', 'url'=>array('create')),
	array('label'=>'Detail Pelatihan', 'url'=>array('view', 'id'=>$model->id_pelatihan)),
);
?>

<h3>Update Pelatihan <?php echo $model->id_pelatihan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>