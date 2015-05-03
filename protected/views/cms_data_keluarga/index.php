<?php
/* @var $this Cms_data_keluargaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Keluarga',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create Keluarga', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage Keluarga', 'url'=>array('admin')),
);
?>

<h1>Keluarga</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
