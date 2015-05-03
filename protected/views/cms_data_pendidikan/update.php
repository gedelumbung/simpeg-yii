<?php
/* @var $this Cms_data_pendidikanController */
/* @var $model Pendidikan */

$this->breadcrumbs=array(
	'Pendidikan'=>array('index'),
	$model->id_pendidikan=>array('view','id'=>$model->id_pendidikan),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Pendidikan', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Pendidikan', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Detail Pendidikan', 'url'=>array('view', 'id'=>$model->id_pendidikan)),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>Update Pendidikan <?php echo $model->id_pendidikan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model,'id'=>$model->id_pegawai)); ?>