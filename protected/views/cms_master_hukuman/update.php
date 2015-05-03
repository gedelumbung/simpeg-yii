<?php
/* @var $this Cms_master_hukumanController */
/* @var $model Hukuman */

$this->breadcrumbs=array(
	'Hukumen'=>array('index'),
	$model->id_hukuman=>array('view','id'=>$model->id_hukuman),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Hukuman', 'url'=>array('index')),
	array('label'=>'Tambah Hukuman', 'url'=>array('create')),
	array('label'=>'Detail Hukuman', 'url'=>array('view', 'id'=>$model->id_hukuman)),
);
?>

<h3>Update Hukuman <?php echo $model->id_hukuman; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>