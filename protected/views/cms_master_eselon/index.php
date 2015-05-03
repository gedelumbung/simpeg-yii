<?php
/* @var $this Cms_master_eselonController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eselon',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Eselon', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Eselon', 'url'=>array('admin')),
);
?>

<h1>Eselon</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
