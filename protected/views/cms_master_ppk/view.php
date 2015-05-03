<?php
/* @var $this Cms_master_ppkController */
/* @var $model Ppk */

$this->breadcrumbs=array(
	'Ppk'=>array('index'),
	$model->id_ppk,
);

$this->menu=array(
	array('label'=>'Data Ppk', 'url'=>array('index')),
	array('label'=>'Tambah Ppk', 'url'=>array('create')),
	array('label'=>'Edit Ppk', 'url'=>array('update', 'id'=>$model->id_ppk)),
	array('label'=>'Hapus Ppk', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_ppk),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Ppk #<?php echo $model->id_ppk; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_ppk',
		'nama_ppk',
		'parent_satuan_kerja',
	),
)); ?>

</div>
</div>
