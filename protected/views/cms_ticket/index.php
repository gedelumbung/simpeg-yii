<?php
/* @var $this Cms_ticketController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ticket Cms',
);

$this->menu=array(
	array('label'=>'Create TicketCms', 'url'=>array('create')),
	array('label'=>'Manage TicketCms', 'url'=>array('admin')),
);
?>

<h1>Ticket Cms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
