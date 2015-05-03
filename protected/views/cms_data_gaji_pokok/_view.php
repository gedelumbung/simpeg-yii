<?php
/* @var $this Cms_data_gaji_pokokController */
/* @var $data GajiPokok */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_gaji_pokok')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_gaji_pokok), array('view', 'id'=>$data->id_gaji_pokok)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->id_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_golongan')); ?>:</b>
	<?php echo CHtml::encode($data->id_golongan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor_sk')); ?>:</b>
	<?php echo CHtml::encode($data->nomor_sk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_sk')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_sk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dasar_perubahan')); ?>:</b>
	<?php echo CHtml::encode($data->dasar_perubahan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gaji_pokok')); ?>:</b>
	<?php echo CHtml::encode($data->gaji_pokok); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('masa_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->masa_kerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pejabat_menetapkan')); ?>:</b>
	<?php echo CHtml::encode($data->pejabat_menetapkan); ?>
	<br />

	*/ ?>

</div>