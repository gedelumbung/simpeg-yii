<?php
/* @var $this Cms_data_riwayat_pangkatController */
/* @var $model RiwayatPangkat */

$this->breadcrumbs=array(
	'Riwayat Pangkat'=>array('index'),
	$model->id_riwayat_pangkat=>array('view','id'=>$model->id_riwayat_pangkat),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Riwayat Pangkat', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Riwayat Pangkat', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Detail Riwayat Pangkat', 'url'=>array('view', 'id'=>$model->id_riwayat_pangkat)),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>Update Riwayat Pangkat <?php echo $model->id_riwayat_pangkat; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $model->id_pegawai)); ?>