<?php
/* @var $this Cms_master_golonganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Golongan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Golongan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Golongan', 'url'=>array('admin')),
);
?>

<h1>Golongan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
