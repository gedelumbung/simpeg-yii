<?php
/* @var $this Cms_master_eselonController */
/* @var $model Eselon */

$this->breadcrumbs=array(
	'Eselon'=>array('index'),
	$model->id_eselon,
);

$this->menu=array(
	array('label'=>'Data Eselon', 'url'=>array('index')),
	array('label'=>'Tambah Eselon', 'url'=>array('create')),
	array('label'=>'Edit Eselon', 'url'=>array('update', 'id'=>$model->id_eselon)),
	array('label'=>'Hapus Eselon', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_eselon),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Eselon #<?php echo $model->id_eselon; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_eselon',
		'nama_eselon',
		'level',
	),
)); ?>

</div>
</div>
