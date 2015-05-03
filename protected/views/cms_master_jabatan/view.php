<?php
/* @var $this Cms_master_jabatanController */
/* @var $model Jabatan */

$this->breadcrumbs=array(
	'Jabatan'=>array('index'),
	$model->id_jabatan,
);

$this->menu=array(
	array('label'=>'Data Jabatan', 'url'=>array('index')),
	array('label'=>'Tambah Jabatan', 'url'=>array('create')),
	array('label'=>'Edit Jabatan', 'url'=>array('update', 'id'=>$model->id_jabatan)),
	array('label'=>'Hapus Jabatan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_jabatan),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Jabatan #<?php echo $model->id_jabatan; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_jabatan',
		'nama_jabatan',
		'level',
	),
)); ?>

</div>
</div>
