<?php
/* @var $this Cms_data_pelatihanController */
/* @var $model DataPelatihan */

$this->breadcrumbs=array(
	'Data Pelatihan'=>array('index'),
	$model->id_pelatihan=>array('view','id'=>$model->id_pelatihan),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Data Pelatihan', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Data Pelatihan', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Detail Data Pelatihan', 'url'=>array('view', 'id'=>$model->id_pelatihan)),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>Update Data Pelatihan <?php echo $model->id_pelatihan; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model,'id'=>$model->id_pegawai)); ?>