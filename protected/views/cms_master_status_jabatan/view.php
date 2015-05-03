<?php
/* @var $this Cms_master_status_jabatanController */
/* @var $model StatusJabatan */

$this->breadcrumbs=array(
	'Status Jabatan'=>array('index'),
	$model->id_status_jabatan,
);

$this->menu=array(
	array('label'=>'Data Status Jabatan', 'url'=>array('index')),
	array('label'=>'Tambah Status Jabatan', 'url'=>array('create')),
	array('label'=>'Edit Status Jabatan', 'url'=>array('update', 'id'=>$model->id_status_jabatan)),
	array('label'=>'Hapus Status Jabatan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_status_jabatan),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Status Jabatan #<?php echo $model->id_status_jabatan; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_status_jabatan',
		'nama_jabatan',
	),
)); ?>

</div>
</div>
