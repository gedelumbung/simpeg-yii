<?php
/* @var $this Cms_data_penghargaanController */
/* @var $model DataPenghargaan */

$this->breadcrumbs=array(
	'Data Penghargaan'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$id)),
	array('label'=>'Data Data Penghargaan', 'url'=>array('index', 'id'=>$id)),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $id)); ?></h4>
<h3>Create Data Penghargaan</h3>

<?php $this->renderPartial('_form', array('model'=>$model,'id'=>$id)); ?>