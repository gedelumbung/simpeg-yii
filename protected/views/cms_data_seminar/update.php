<?php
/* @var $this Cms_data_seminarController */
/* @var $model Seminar */

$this->breadcrumbs=array(
	'Seminar'=>array('index'),
	$model->id_seminar=>array('view','id'=>$model->id_seminar),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Seminar', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Seminar', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Detail Seminar', 'url'=>array('view', 'id'=>$model->id_seminar)),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>Update Seminar <?php echo $model->id_seminar; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model,'id'=>$model->id_pegawai)); ?>