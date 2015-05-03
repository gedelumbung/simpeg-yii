<?php
/* @var $this Cms_data_penghargaanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Penghargaan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create DataPenghargaan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage DataPenghargaan', 'url'=>array('admin')),
);
?>

<h1>Data Penghargaan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
