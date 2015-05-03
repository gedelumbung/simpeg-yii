<?php
/* @var $this Cms_data_hukumanController */
/* @var $model DataHukuman */

$this->breadcrumbs=array(
	'Data Hukumen'=>array('index'),
	$model->id_hukuman=>array('view','id'=>$model->id_hukuman),
	'Update',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$model->id_pegawai)),
	array('label'=>'Data Data Hukuman', 'url'=>array('index', 'id'=>$model->id_pegawai)),
	array('label'=>'Tambah Data Hukuman', 'url'=>array('create', 'id'=>$model->id_pegawai)),
	array('label'=>'Detail Data Hukuman', 'url'=>array('view', 'id'=>$model->id_hukuman)),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $model->id_pegawai)); ?></h4>
<h3>Update Data Hukuman <?php echo $model->id_hukuman; ?></h3>

<?php $this->renderPartial('_form', array('model'=>$model,'id'=>$model->id_pegawai)); ?>