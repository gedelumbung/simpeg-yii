<?php
/* @var $this Cms_data_pendidikanController */
/* @var $data Pendidikan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pendidikan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pendidikan), array('view', 'id'=>$data->id_pendidikan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->id_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tingkat_pendidikan')); ?>:</b>
	<?php echo CHtml::encode($data->tingkat_pendidikan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jurusan')); ?>:</b>
	<?php echo CHtml::encode($data->jurusan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uraian')); ?>:</b>
	<?php echo CHtml::encode($data->uraian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teknik_non_teknik')); ?>:</b>
	<?php echo CHtml::encode($data->teknik_non_teknik); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sekolah')); ?>:</b>
	<?php echo CHtml::encode($data->sekolah); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tempat_sekolah')); ?>:</b>
	<?php echo CHtml::encode($data->tempat_sekolah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor_sttb')); ?>:</b>
	<?php echo CHtml::encode($data->nomor_sttb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_sttb')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_sttb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lulus')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lulus); ?>
	<br />

	*/ ?>

</div>