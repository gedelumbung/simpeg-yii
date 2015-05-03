<?php
/* @var $this Cms_master_satuan_kerjaController */
/* @var $model SatuanKerja */

$this->breadcrumbs=array(
	'Satuan Kerja'=>array('index'),
	$model->id_satuan_kerja,
);

$this->menu=array(
	array('label'=>'Data Satuan Kerja', 'url'=>array('index')),
	array('label'=>'Tambah Satuan Kerja', 'url'=>array('create')),
	array('label'=>'Edit Satuan Kerja', 'url'=>array('update', 'id'=>$model->id_satuan_kerja)),
	array('label'=>'Hapus Satuan Kerja', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_satuan_kerja),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Satuan Kerja #<?php echo $model->id_satuan_kerja; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_satuan_kerja',
		'nama_satuan_kerja',
		'parent_unit',
	),
)); ?>

</div>
</div>
