<?php
/* @var $this Cms_data_gaji_pokokController */
/* @var $model GajiPokok */

$this->breadcrumbs=array(
	'Gaji Pokok'=>array('index'),
	$model->id_gaji_pokok=>array('view','id'=>$model->id_gaji_pokok),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Gaji Pokok', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Gaji Pokok', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Detail Gaji Pokok', 'url'=>array('view', 'id'=>$model->id_gaji_pokok)),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>Update Gaji Pokok <?php echo $model->id_gaji_pokok; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model,'id'=>$model->id_pegawai)); ?>