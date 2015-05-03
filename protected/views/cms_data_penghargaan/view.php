<?php
/* @var $this Cms_data_penghargaanController */
/* @var $model DataPenghargaan */

$this->breadcrumbs=array(
	'Data Penghargaan'=>array('index'),
	$model->id_penghargaan,
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Data Penghargaan', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Data Penghargaan', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Edit Data Penghargaan', 'url'=>array('update', 'id'=>$model->id_penghargaan)),
	array('label'=>'Hapus Data Penghargaan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_penghargaan),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Data Penghargaan #<?php echo $model->id_penghargaan; ?></h3>

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
		'Pegawai.nama_pegawai',
		'Penghargaan.nama_penghargaan',
		'uraian',
		'nomor_sk',
		'tanggal_sk',
	),
)); ?>

</div>
</div>
