<?php
/* @var $this Cms_userController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Cms',
);

$this->menu=array(
	array('label'=>'Create UserCms', 'url'=>array('create')),
	array('label'=>'Manage UserCms', 'url'=>array('admin')),
);
?>

<h1>User Cms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
