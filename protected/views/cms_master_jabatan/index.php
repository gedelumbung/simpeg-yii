<?php
/* @var $this Cms_master_jabatanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jabatan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Jabatan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Jabatan', 'url'=>array('admin')),
);
?>

<h1>Jabatan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
