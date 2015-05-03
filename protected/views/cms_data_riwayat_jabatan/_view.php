<?php
/* @var $this Cms_data_riwayat_jabatanController */
/* @var $data RiwayatJabatan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_riwayat_jabatan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_riwayat_jabatan), array('view', 'id'=>$data->id_riwayat_jabatan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->id_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penempatan')); ?>:</b>
	<?php echo CHtml::encode($data->penempatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_jabatan')); ?>:</b>
	<?php echo CHtml::encode($data->id_jabatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unit_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->id_unit_kerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uraian')); ?>:</b>
	<?php echo CHtml::encode($data->uraian); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_eselon')); ?>:</b>
	<?php echo CHtml::encode($data->id_eselon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tmt_eselon')); ?>:</b>
	<?php echo CHtml::encode($data->tmt_eselon); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi); ?>
	<br />

	*/ ?>

</div>