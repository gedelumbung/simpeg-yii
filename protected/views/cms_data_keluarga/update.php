<?php
/* @var $this Cms_data_keluargaController */
/* @var $model Keluarga */

$this->breadcrumbs=array(
	'Keluarga'=>array('index'),
	$model->id_data_keluarga=>array('view','id'=>$model->id_data_keluarga),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Keluarga', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Keluarga', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Detail Keluarga', 'url'=>array('view', 'id'=>$model->id_data_keluarga)),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>Update Keluarga <?php echo $model->id_data_keluarga; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model, 'id' => $model->id_pegawai)); ?>