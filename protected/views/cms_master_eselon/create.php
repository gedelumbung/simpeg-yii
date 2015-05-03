<?php
/* @var $this Cms_master_eselonController */
/* @var $model Eselon */

$this->breadcrumbs=array(
	'Eselon'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Eselon', 'url'=>array('index')),
);
?>

<h3>Create Eselon</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>