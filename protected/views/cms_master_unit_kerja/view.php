<?php
/* @var $this Cms_master_unit_kerjaController */
/* @var $model UnitKerja */

$this->breadcrumbs=array(
	'Unit Kerja'=>array('index'),
	$model->id_unit_kerja,
);

$this->menu=array(
	array('label'=>'Data Unit Kerja', 'url'=>array('index')),
	array('label'=>'Tambah Unit Kerja', 'url'=>array('create')),
	array('label'=>'Edit Unit Kerja', 'url'=>array('update', 'id'=>$model->id_unit_kerja)),
	array('label'=>'Hapus Unit Kerja', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_unit_kerja),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Unit Kerja #<?php echo $model->id_unit_kerja; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_unit_kerja',
		'nama_unit_kerja',
		'eselon',
		'parent_unit',
	),
)); ?>

</div>
</div>
