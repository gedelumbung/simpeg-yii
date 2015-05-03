<?php
/* @var $this Cms_data_seminarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Seminar',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Seminar', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Seminar', 'url'=>array('admin')),
);
?>

<h1>Seminar</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
