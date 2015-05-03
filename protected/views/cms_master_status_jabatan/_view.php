<?php
/* @var $this Cms_master_status_jabatanController */
/* @var $data StatusJabatan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status_jabatan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_status_jabatan), array('view', 'id'=>$data->id_status_jabatan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_jabatan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_jabatan); ?>
	<br />


</div>