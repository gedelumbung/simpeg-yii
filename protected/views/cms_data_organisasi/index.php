<?php
/* @var $this Cms_data_organisasiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Organisasi',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Organisasi', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Organisasi', 'url'=>array('admin')),
);
?>

<h1>Organisasi</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
