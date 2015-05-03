<?php
/* @var $this Cms_master_penghargaanController */
/* @var $data Penghargaan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_penghargaan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_penghargaan), array('view', 'id'=>$data->id_penghargaan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_penghargaan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_penghargaan); ?>
	<br />


</div>