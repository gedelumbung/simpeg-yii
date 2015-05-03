<?php
/* @var $this Cms_data_hukumanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Data Hukumen',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create DataHukuman', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage DataHukuman', 'url'=>array('admin')),
);
?>

<h1>Data Hukumen</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
