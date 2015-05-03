<?php
/* @var $this Cms_data_pendidikanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pendidikan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Pendidikan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Pendidikan', 'url'=>array('admin')),
);
?>

<h1>Pendidikan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
