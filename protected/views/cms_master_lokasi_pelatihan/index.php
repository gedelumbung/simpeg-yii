<?php
/* @var $this Cms_master_lokasi_pelatihanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lokasi Pelatihan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create LokasiPelatihan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage LokasiPelatihan', 'url'=>array('admin')),
);
?>

<h1>Lokasi Pelatihan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
