<?php
/* @var $this Cms_master_penghargaanController */
/* @var $model Penghargaan */

$this->breadcrumbs=array(
	'Penghargaan'=>array('index'),
	$model->id_penghargaan,
);

$this->menu=array(
	array('label'=>'Data Penghargaan', 'url'=>array('index')),
	array('label'=>'Tambah Penghargaan', 'url'=>array('create')),
	array('label'=>'Edit Penghargaan', 'url'=>array('update', 'id'=>$model->id_penghargaan)),
	array('label'=>'Hapus Penghargaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_penghargaan),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Penghargaan #<?php echo $model->id_penghargaan; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_penghargaan',
		'nama_penghargaan',
	),
)); ?>

</div>
</div>
