<?php
/* @var $this Cms_master_hukumanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hukumen',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Hukuman', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Hukuman', 'url'=>array('admin')),
);
?>

<h1>Hukumen</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
