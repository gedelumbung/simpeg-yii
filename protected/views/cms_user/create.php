<?php
/* @var $this Cms_master_unit_kerjaController */
/* @var $model UnitKerja */

$this->breadcrumbs=array(
	'Unit Kerja'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data User', 'url'=>array('index')),
);
?>

<h3>Create User</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>