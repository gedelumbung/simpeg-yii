<?php
/* @var $this Cms_master_status_pegawaiController */
/* @var $model StatusPegawai */

$this->breadcrumbs=array(
	'Status Pegawai'=>array('index'),
	$model->id_status_pegawai,
);

$this->menu=array(
	array('label'=>'Data Status Pegawai', 'url'=>array('index')),
	array('label'=>'Tambah Status Pegawai', 'url'=>array('create')),
	array('label'=>'Edit Status Pegawai', 'url'=>array('update', 'id'=>$model->id_status_pegawai)),
	array('label'=>'Hapus Status Pegawai', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_status_pegawai),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Status Pegawai #<?php echo $model->id_status_pegawai; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_status_pegawai',
		'nama_status',
	),
)); ?>

</div>
</div>
