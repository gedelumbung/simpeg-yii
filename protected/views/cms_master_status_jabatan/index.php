<?php
/* @var $this Cms_master_status_jabatanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Status Jabatan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create StatusJabatan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage StatusJabatan', 'url'=>array('admin')),
);
?>

<h1>Status Jabatan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
