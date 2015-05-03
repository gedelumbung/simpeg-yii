<?php
/* @var $this Cms_data_organisasiController */
/* @var $model Organisasi */

$this->breadcrumbs=array(
	'Organisasi'=>array('index'),
	$model->id_organisasi=>array('view','id'=>$model->id_organisasi),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Organisasi', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Organisasi', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Detail Organisasi', 'url'=>array('view', 'id'=>$model->id_organisasi)),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>Update Organisasi <?php echo $model->id_organisasi; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model,'id'=>$model->id_pegawai)); ?>