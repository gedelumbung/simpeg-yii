<?php
/* @var $this Cms_data_gaji_pokokController */
/* @var $model GajiPokok */

$this->breadcrumbs=array(
	'Gaji Pokok'=>array('index'),
	$model->id_gaji_pokok,
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Gaji Pokok', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Gaji Pokok', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Edit Gaji Pokok', 'url'=>array('update', 'id'=>$model->id_gaji_pokok)),
	array('label'=>'Hapus Gaji Pokok', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_gaji_pokok),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>View Gaji Pokok #<?php echo $model->id_gaji_pokok; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_gaji_pokok',
		'Pegawai.nama_pegawai',
		'Golongan.golongan',
		'nomor_sk',
		'tanggal_sk',
		'dasar_perubahan',
		'gaji_pokok',
		'tanggal_mulai',
		'tanggal_selesai',
		'masa_kerja',
		'pejabat_menetapkan',
	),
)); ?>

</div>
</div>
