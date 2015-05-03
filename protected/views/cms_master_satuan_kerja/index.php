<?php
/* @var $this Cms_master_satuan_kerjaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Satuan Kerja',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create SatuanKerja', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage SatuanKerja', 'url'=>array('admin')),
);
?>

<h1>Satuan Kerja</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
