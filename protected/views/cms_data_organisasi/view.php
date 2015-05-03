<?php
/* @var $this Cms_data_organisasiController */
/* @var $model Organisasi */

$this->breadcrumbs=array(
	'Organisasi'=>array('index'),
	$model->id_organisasi,
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Organisasi', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Organisasi', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Edit Organisasi', 'url'=>array('update', 'id'=>$model->id_organisasi)),
	array('label'=>'Hapus Organisasi', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_organisasi),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>View Organisasi #<?php echo $model->id_organisasi; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_organisasi',
		'Pegawai.nama_pegawai',
		'uraian',
		'lokasi',
		'tanggal',
	),
)); ?>

</div>
</div>
