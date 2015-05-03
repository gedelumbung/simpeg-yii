<?php
/* @var $this Cms_master_status_pegawaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Status Pegawai',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create StatusPegawai', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage StatusPegawai', 'url'=>array('admin')),
);
?>

<h1>Status Pegawai</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
