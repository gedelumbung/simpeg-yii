<?php
/* @var $this Cms_master_ppkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ppk',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Ppk', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Ppk', 'url'=>array('admin')),
);
?>

<h1>Ppk</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
