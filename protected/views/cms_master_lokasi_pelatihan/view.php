<?php
/* @var $this Cms_master_lokasi_pelatihanController */
/* @var $model LokasiPelatihan */

$this->breadcrumbs=array(
	'Lokasi Pelatihan'=>array('index'),
	$model->id_lokasi_pelatihan,
);

$this->menu=array(
	array('label'=>'Data Lokasi Pelatihan', 'url'=>array('index')),
	array('label'=>'Tambah Lokasi Pelatihan', 'url'=>array('create')),
	array('label'=>'Edit Lokasi Pelatihan', 'url'=>array('update', 'id'=>$model->id_lokasi_pelatihan)),
	array('label'=>'Hapus Lokasi Pelatihan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_lokasi_pelatihan),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Lokasi Pelatihan #<?php echo $model->id_lokasi_pelatihan; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_lokasi_pelatihan',
		'nama_lokasi',
	),
)); ?>

</div>
</div>
