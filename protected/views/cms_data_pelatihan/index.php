<?php
/* @var $this Cms_data_pelatihanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Pelatihan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create DataPelatihan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage DataPelatihan', 'url'=>array('admin')),
);
?>

<h1>Data Pelatihan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
