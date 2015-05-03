<?php
/* @var $this Cms_data_penghargaanController */
/* @var $data DataPenghargaan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_penghargaan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_penghargaan), array('view', 'id'=>$data->id_penghargaan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->id_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_master_penghargaan')); ?>:</b>
	<?php echo CHtml::encode($data->id_master_penghargaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uraian')); ?>:</b>
	<?php echo CHtml::encode($data->uraian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor_sk')); ?>:</b>
	<?php echo CHtml::encode($data->nomor_sk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_sk')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_sk); ?>
	<br />


</div>