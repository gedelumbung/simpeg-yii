<?php
/* @var $this Cms_data_hukumanController */
/* @var $model DataHukuman */

$this->breadcrumbs=array(
	'Data Hukumen'=>array('index'),
	$model->id_hukuman,
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Data Hukuman', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Data Hukuman', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Edit Data Hukuman', 'url'=>array('update', 'id'=>$model->id_hukuman)),
	array('label'=>'Hapus Data Hukuman', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_hukuman),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>View Data Hukuman #<?php echo $model->id_hukuman; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_hukuman',
		'Pegawai.nama_pegawai',
		'Hukuman.nama_hukuman',
		'uraian',
		'nomor_sk',
		'tanggal_sk',
		'tanggal_mulai',
		'tanggal_selesai',
		'masa_berlaku',
		'pejabat_menetapkan',
	),
)); ?>

</div>
</div>
