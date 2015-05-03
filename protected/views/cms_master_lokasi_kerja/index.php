<?php
/* @var $this Cms_master_lokasi_kerjaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lokasi Kerja',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create LokasiKerja', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage LokasiKerja', 'url'=>array('admin')),
);
?>

<h1>Lokasi Kerja</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
