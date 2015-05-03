<?php
/* @var $this Cms_data_hukumanController */
/* @var $data DataHukuman */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hukuman')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_hukuman), array('view', 'id'=>$data->id_hukuman)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->id_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_master_hukuman')); ?>:</b>
	<?php echo CHtml::encode($data->id_master_hukuman); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_mulai); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('masa_berlaku')); ?>:</b>
	<?php echo CHtml::encode($data->masa_berlaku); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pejabat_menetapkan')); ?>:</b>
	<?php echo CHtml::encode($data->pejabat_menetapkan); ?>
	<br />

	*/ ?>

</div>