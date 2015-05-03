<?php
/* @var $this Cms_master_pelatihanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pelatihan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Pelatihan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Pelatihan', 'url'=>array('admin')),
);
?>

<h1>Pelatihan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
