<?php
/* @var $this Cms_data_pendidikanController */
/* @var $model Pendidikan */

$this->breadcrumbs=array(
	'Pendidikan'=>array('index'),
	$model->id_pendidikan,
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Pendidikan', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Pendidikan', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Edit Pendidikan', 'url'=>array('update', 'id'=>$model->id_pendidikan)),
	array('label'=>'Hapus Pendidikan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pendidikan),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Pendidikan #<?php echo $model->id_pendidikan; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pendidikan',
		'Pegawai.nama_pegawai',
		'tingkat_pendidikan',
		'jurusan',
		'uraian',
		'teknik_non_teknik',
		'sekolah',
		'tempat_sekolah',
		'nomor_sttb',
		'tanggal_sttb',
		'tanggal_lulus',
	),
)); ?>

</div>
</div>
