<?php
/* @var $this Cms_data_gaji_pokokController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gaji Pokok',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create GajiPokok', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage GajiPokok', 'url'=>array('admin')),
);
?>

<h1>Gaji Pokok</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
