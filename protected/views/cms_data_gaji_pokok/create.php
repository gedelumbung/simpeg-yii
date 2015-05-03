<?php
/* @var $this Cms_data_gaji_pokokController */
/* @var $model GajiPokok */

$this->breadcrumbs=array(
	'Gaji Pokok'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$id)),
	array('label'=>'Data Gaji Pokok', 'url'=>array('index', 'id'=>$id)),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $id)); ?></h4>
<h3>Create Gaji Pokok</h3>

<?php $this->renderPartial('_form', array('model'=>$model,'id'=>$id)); ?>