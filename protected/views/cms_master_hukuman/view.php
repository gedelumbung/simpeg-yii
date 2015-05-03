<?php
/* @var $this Cms_master_hukumanController */
/* @var $model Hukuman */

$this->breadcrumbs=array(
	'Hukumen'=>array('index'),
	$model->id_hukuman,
);

$this->menu=array(
	array('label'=>'Data Hukuman', 'url'=>array('index')),
	array('label'=>'Tambah Hukuman', 'url'=>array('create')),
	array('label'=>'Edit Hukuman', 'url'=>array('update', 'id'=>$model->id_hukuman)),
	array('label'=>'Hapus Hukuman', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hukuman),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View Hukuman #<?php echo $model->id_hukuman; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_hukuman',
		'nama_hukuman',
	),
)); ?>

</div>
</div>
