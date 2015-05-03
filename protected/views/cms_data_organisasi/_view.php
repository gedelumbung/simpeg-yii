<?php
/* @var $this Cms_data_organisasiController */
/* @var $data Organisasi */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_organisasi')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_organisasi), array('view', 'id'=>$data->id_organisasi)); ?>
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