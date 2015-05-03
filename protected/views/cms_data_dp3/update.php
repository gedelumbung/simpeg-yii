<?php
/* @var $this Cms_data_dp3Controller */
/* @var $model Dp3 */

$this->breadcrumbs=array(
	'Dp3'=>array('index'),
	$model->id_dp3=>array('view','id'=>$model->id_dp3),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Dp3', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Dp3', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Detail Dp3', 'url'=>array('view', 'id'=>$model->id_dp3)),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>Update Dp3 <?php echo $model->id_dp3; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model,'id'=>$model->id_pegawai)); ?>