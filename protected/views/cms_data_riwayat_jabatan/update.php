<?php
/* @var $this Cms_data_riwayat_jabatanController */
/* @var $model RiwayatJabatan */

$this->breadcrumbs=array(
	'Riwayat Jabatan'=>array('index'),
	$model->id_riwayat_jabatan=>array('view','id'=>$model->id_riwayat_jabatan),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Riwayat Jabatan', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Riwayat Jabatan', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Detail Riwayat Jabatan', 'url'=>array('view', 'id'=>$model->id_riwayat_jabatan)),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>Update Riwayat Jabatan <?php echo $model->id_riwayat_jabatan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $model->id_pegawai)); ?>