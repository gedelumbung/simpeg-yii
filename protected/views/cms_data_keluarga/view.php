<?php
/* @var $this Cms_data_keluargaController */
/* @var $model Keluarga */

$this->breadcrumbs=array(
	'Keluarga'=>array('index'),
	$model->id_data_keluarga,
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Keluarga', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Keluarga', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Edit Keluarga', 'url'=>array('update', 'id'=>$model->id_data_keluarga)),
	array('label'=>'Hapus Keluarga', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_data_keluarga),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>View Keluarga #<?php echo $model->id_data_keluarga; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_data_keluarga',
		'Pegawai.nama_pegawai',
		'nama_anggota_keluarga',
		'tanggal_lahir',
		'status_kawin',
		'tanggal_nikah',
		'uraian',
		'tanggal_cerai_meninggal',
		'pekerjaan',
	),
)); ?>

</div>
</div>
