<?php
/* @var $this Cms_master_pelatihanController */
/* @var $model Pelatihan */

$this->breadcrumbs=array(
	'Pelatihan'=>array('index'),
	$model->id_pelatihan,
);

$this->menu=array(
	array('label'=>'Data Pelatihan', 'url'=>array('index')),
	array('label'=>'Tambah Pelatihan', 'url'=>array('create')),
	array('label'=>'Edit Pelatihan', 'url'=>array('update', 'id'=>$model->id_pelatihan)),
	array('label'=>'Hapus Pelatihan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_pelatihan),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Pelatihan #<?php echo $model->id_pelatihan; ?></h3>

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
		'nama_pelatihan',
		'level',
	),
)); ?>

</div>
</div>
