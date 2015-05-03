<?php
/* @var $this Cms_data_keluargaController */
/* @var $data Keluarga */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_data_keluarga')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_data_keluarga), array('view', 'id'=>$data->id_data_keluarga)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->id_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_anggota_keluarga')); ?>:</b>
	<?php echo CHtml::encode($data->nama_anggota_keluarga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_kawin')); ?>:</b>
	<?php echo CHtml::encode($data->status_kawin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_nikah')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_nikah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uraian')); ?>:</b>
	<?php echo CHtml::encode($data->uraian); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_cerai_meninggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_cerai_meninggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->pekerjaan); ?>
	<br />

	*/ ?>

</div>