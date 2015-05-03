<?php
/* @var $this Cms_data_riwayat_jabatanController */
/* @var $model RiwayatJabatan */

$this->breadcrumbs=array(
	'Riwayat Jabatan'=>array('index'),
	$model->id_riwayat_jabatan,
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Riwayat Jabatan', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Riwayat Jabatan', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Edit Riwayat Jabatan', 'url'=>array('update', 'id'=>$model->id_riwayat_jabatan)),
	array('label'=>'Hapus Riwayat Jabatan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_riwayat_jabatan),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Riwayat Jabatan #<?php echo $model->id_riwayat_jabatan; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_riwayat_jabatan',
		'Pegawai.nama_pegawai',
		array(
				'label' => 'Status',
				'value' => $model->StatusJabatan->nama_jabatan
			),
		'penempatan',
		'Jabatan.nama_jabatan',
		'UnitKerja.nama_unit_kerja',
		'uraian',
		'Eselon.nama_eselon',
		'tmt_eselon',
		'nomor_sk',
		'tanggal_sk',
		'tanggal_mulai',
		'tanggal_selesai',
		'lokasi',
	),
)); ?>

</div>
</div>
