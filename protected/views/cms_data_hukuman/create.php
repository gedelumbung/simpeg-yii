<?php
/* @var $this Cms_data_hukumanController */
/* @var $model DataHukuman */

$this->breadcrumbs=array(
	'Data Hukumen'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$id)),
	array('label'=>'Data Data Hukuman', 'url'=>array('index', 'id'=>$id)),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $id)); ?></h4>
<h3>Create Data Hukuman</h3>

<?php $this->renderPartial('_form', array('model'=>$model,'id'=>$id)); ?>