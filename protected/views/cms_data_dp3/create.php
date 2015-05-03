<?php
/* @var $this Cms_data_dp3Controller */
/* @var $model Dp3 */

$this->breadcrumbs=array(
	'Dp3'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Data Detail Pegawai', 'url'=>array('cms_pegawai/view', 'id'=>$id)),
	array('label'=>'Data Dp3', 'url'=>array('index', 'id'=>$id)),
);
?>

<h4><?php $this->widget('PegawaiWidget', array('id_pegawai' => $id)); ?></h4>
<h3>Create Dp3</h3>

<?php $this->renderPartial('_form', array('model'=>$model,'id'=>$id)); ?>