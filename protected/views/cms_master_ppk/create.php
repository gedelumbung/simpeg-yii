<?php
/* @var $this Cms_master_ppkController */
/* @var $model Ppk */

$this->breadcrumbs=array(
	'Ppk'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Ppk', 'url'=>array('index')),
);
?>

<h3>Create Ppk</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>