<?php
/* @var $this Cms_master_unit_kerjaController */
/* @var $model UnitKerja */

$this->breadcrumbs=array(
	'User'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Data User', 'url'=>array('index')),
	array('label'=>'Tambah User', 'url'=>array('create')),
	array('label'=>'Detail User', 'url'=>array('view', 'id'=>$model->id)),
);
?>

<h3>Update User <?php echo $model->id; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>