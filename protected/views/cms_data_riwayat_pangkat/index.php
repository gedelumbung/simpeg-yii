<?php
/* @var $this Cms_data_riwayat_pangkatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Riwayat Pangkat',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create RiwayatPangkat', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage RiwayatPangkat', 'url'=>array('admin')),
);
?>

<h1>Riwayat Pangkat</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
