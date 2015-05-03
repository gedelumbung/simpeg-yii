<?php
/* @var $this Cms_master_lokasi_kerjaController */
/* @var $model LokasiKerja */

$this->breadcrumbs=array(
	'Lokasi Kerja'=>array('index'),
	$model->id_lokasi_kerja,
);

$this->menu=array(
	array('label'=>'Data Lokasi Kerja', 'url'=>array('index')),
	array('label'=>'Tambah Lokasi Kerja', 'url'=>array('create')),
	array('label'=>'Edit Lokasi Kerja', 'url'=>array('update', 'id'=>$model->id_lokasi_kerja)),
	array('label'=>'Hapus Lokasi Kerja', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_lokasi_kerja),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Lokasi Kerja #<?php echo $model->id_lokasi_kerja; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_lokasi_kerja',
		'lokasi_kerja',
	),
)); ?>

</div>
</div>
