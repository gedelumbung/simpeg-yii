<?php
/* @var $this Cms_data_dp3Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dp3',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Dp3', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Dp3', 'url'=>array('admin')),
);
?>

<h1>Dp3</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
