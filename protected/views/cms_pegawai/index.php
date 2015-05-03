<?php
/* @var $this Cms_pegawaiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pegawai',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Pegawai', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Pegawai', 'url'=>array('admin')),
);
?>

<h1>Pegawai</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
