<?php
/* @var $this Cms_data_riwayat_pangkatController */
/* @var $model RiwayatPangkat */

$this->breadcrumbs=array(
	'Riwayat Pangkat'=>array('index'),
	$model->id_riwayat_pangkat,
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Riwayat Pangkat', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Riwayat Pangkat', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Edit Riwayat Pangkat', 'url'=>array('update', 'id'=>$model->id_riwayat_pangkat)),
	array('label'=>'Hapus Riwayat Pangkat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_riwayat_pangkat),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Riwayat Pangkat #<?php echo $model->id_riwayat_pangkat; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_riwayat_pangkat',
		'Pegawai.nama_pegawai',
		'Golongan.golongan',
		'status',
		'nomor_sk',
		'tanggal_sk',
		'tanggal_mulai',
		'tanggal_selesai',
		'masa_kerja',
	),
)); ?>

</div>
</div>
