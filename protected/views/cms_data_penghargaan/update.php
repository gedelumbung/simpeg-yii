<?php
/* @var $this Cms_data_penghargaanController */
/* @var $model DataPenghargaan */

$this->breadcrumbs=array(
	'Data Penghargaan'=>array('index'),
	$model->id_penghargaan=>array('view','id'=>$model->id_penghargaan),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Data Penghargaan', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Data Penghargaan', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Detail Data Penghargaan', 'url'=>array('view', 'id'=>$model->id_penghargaan)),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>Update Data Penghargaan <?php echo $model->id_penghargaan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model,'id'=>$model->id_pegawai)); ?>