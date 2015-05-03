<?php
/* @var $this Cms_master_unit_kerjaController */
/* @var $model UnitKerja */

$this->breadcrumbs=array(
	'Unit Kerja'=>array('index'),
	$model->id_unit_kerja=>array('view','id'=>$model->id_unit_kerja),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Unit Kerja', 'url'=>array('index')),
	array('label'=>'Tambah Unit Kerja', 'url'=>array('create')),
	array('label'=>'Detail Unit Kerja', 'url'=>array('view', 'id'=>$model->id_unit_kerja)),
);
?>

<h3>Update Unit Kerja <?php echo $model->id_unit_kerja; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>