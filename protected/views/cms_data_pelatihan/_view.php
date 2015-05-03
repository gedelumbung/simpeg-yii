<?php
/* @var $this Cms_data_pelatihanController */
/* @var $data DataPelatihan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pelatihan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pelatihan), array('view', 'id'=>$data->id_pelatihan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->id_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_master_pelatihan')); ?>:</b>
	<?php echo CHtml::encode($data->id_master_pelatihan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uraian')); ?>:</b>
	<?php echo CHtml::encode($data->uraian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_sertifikat')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_sertifikat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jam_pelatihan')); ?>:</b>
	<?php echo CHtml::encode($data->jam_pelatihan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('negara')); ?>:</b>
	<?php echo CHtml::encode($data->negara); ?>
	<br />

	*/ ?>

</div>