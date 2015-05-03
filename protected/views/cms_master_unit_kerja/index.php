<?php
/* @var $this Cms_master_unit_kerjaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Unit Kerja',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create UnitKerja', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage UnitKerja', 'url'=>array('admin')),
);
?>

<h1>Unit Kerja</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
