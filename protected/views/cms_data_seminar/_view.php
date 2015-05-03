<?php
/* @var $this Cms_data_seminarController */
/* @var $data Seminar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_seminar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_seminar), array('view', 'id'=>$data->id_seminar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->id_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uraian')); ?>:</b>
	<?php echo CHtml::encode($data->uraian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />


</div>