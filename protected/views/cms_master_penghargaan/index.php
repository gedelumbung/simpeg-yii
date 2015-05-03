<?php
/* @var $this Cms_master_penghargaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Penghargaan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Penghargaan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Penghargaan', 'url'=>array('admin')),
);
?>

<h1>Penghargaan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
