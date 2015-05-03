<?php
/* @var $this Cms_master_hukumanController */
/* @var $model Hukuman */

$this->breadcrumbs=array(
	'Hukumen'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Hukuman', 'url'=>array('index')),
);
?>

<h3>Create Hukuman</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>