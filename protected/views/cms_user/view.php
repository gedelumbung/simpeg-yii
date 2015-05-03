<?php
/* @var $this Cms_master_unit_kerjaController */
/* @var $model UnitKerja */

$this->breadcrumbs=array(
	'User'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Data User', 'url'=>array('index')),
	array('label'=>'Tambah User', 'url'=>array('create')),
	array('label'=>'Edit User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Hapus User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h3>View User #<?php echo $model->id; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'nama',
		'email',
	),
)); ?>

</div>
</div>

