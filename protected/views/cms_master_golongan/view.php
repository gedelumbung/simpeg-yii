<?php
/* @var $this Cms_master_golonganController */
/* @var $model Golongan */

$this->breadcrumbs=array(
	'Golongan'=>array('index'),
	$model->id_golongan,
);

$this->menu=array(
	array('label'=>'Data Golongan', 'url'=>array('index')),
	array('label'=>'Tambah Golongan', 'url'=>array('create')),
	array('label'=>'Edit Golongan', 'url'=>array('update', 'id'=>$model->id_golongan)),
	array('label'=>'Hapus Golongan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_golongan),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Golongan #<?php echo $model->id_golongan; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_golongan',
		'golongan',
		'uraian',
		'level',
	),
)); ?>

</div>
</div>
