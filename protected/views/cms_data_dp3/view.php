<?php
/* @var $this Cms_data_dp3Controller */
/* @var $model Dp3 */

$this->breadcrumbs=array(
	'Dp3'=>array('index'),
	$model->id_dp3,
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Dp3', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Dp3', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Edit Dp3', 'url'=>array('update', 'id'=>$model->id_dp3)),
	array('label'=>'Hapus Dp3', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_dp3),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>View Dp3 #<?php echo $model->id_dp3; ?></h3>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_dp3',
		'Pegawai.nama_pegawai',
		'tahun',
		'kesetiaan',
		'prestasi',
		'tanggung_jawab',
		'ketaatan',
		'kejujuran',
		'kerjasama',
		'prakarsa',
		'kepemimpinan',
		'rata_rata',
		'atasan',
		'penilai',
		'mengetahui',
	),
)); ?>

</div>
</div>
