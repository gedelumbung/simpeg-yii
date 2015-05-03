<?php
/* @var $this Cms_data_seminarController */
/* @var $model Seminar */

$this->breadcrumbs=array(
	'Seminar'=>array('index'),
	$model->id_seminar,
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Seminar', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Seminar', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Edit Seminar', 'url'=>array('update', 'id'=>$model->id_seminar)),
	array('label'=>'Hapus Seminar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_seminar),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Seminar #<?php echo $model->id_seminar; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_seminar',
		'Pegawai.nama_pegawai',
		'uraian',
		'lokasi',
		'tanggal',
	),
)); ?>

</div>
</div>
