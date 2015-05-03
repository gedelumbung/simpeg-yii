<?php
/* @var $this Cms_data_riwayat_jabatanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Riwayat Jabatan',
);

$this->menu=array(
	array('label'=>'<i class="icon icon-adjust"></i> Create RiwayatJabatan', 'url'=>array('create')),
	array('label'=>'<i class="icon icon-list"></i> Manage RiwayatJabatan', 'url'=>array('admin')),
);
?>

<h1>Riwayat Jabatan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
