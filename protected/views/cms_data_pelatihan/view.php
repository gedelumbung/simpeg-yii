<?php
/* @var $this Cms_data_pelatihanController */
/* @var $model DataPelatihan */

$this->breadcrumbs=array(
	'Data Pelatihan'=>array('index'),
	$model->id_pelatihan,
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Data Pelatihan', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Data Pelatihan', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Edit Data Pelatihan', 'url'=>array('update', 'id'=>$model->id_pelatihan)),
	array('label'=>'Hapus Data Pelatihan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pelatihan),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Data Pelatihan #<?php echo $model->id_pelatihan; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_pelatihan',
		'Pegawai.nama_pegawai',
		'Pelatihan.nama_pelatihan',
		'uraian',
		'lokasi',
		'tanggal_sertifikat',
		'jam_pelatihan',
		'negara',
	),
)); ?>

</div>
</div>
