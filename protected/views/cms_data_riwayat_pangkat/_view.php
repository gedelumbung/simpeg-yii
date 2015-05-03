<?php
/* @var $this Cms_data_riwayat_pangkatController */
/* @var $data RiwayatPangkat */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_riwayat_pangkat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_riwayat_pangkat), array('view', 'id'=>$data->id_riwayat_pangkat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->id_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_golongan')); ?>:</b>
	<?php echo CHtml::encode($data->id_golongan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor_sk')); ?>:</b>
	<?php echo CHtml::encode($data->nomor_sk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_sk')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_sk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_mulai); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('masa_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->masa_kerja); ?>
	<br />

	*/ ?>

</div>