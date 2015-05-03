<?php
/* @var $this Cms_master_status_pegawaiController */
/* @var $data StatusPegawai */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_status_pegawai')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_status_pegawai), array('view', 'id'=>$data->id_status_pegawai)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_status')); ?>:</b>
	<?php echo CHtml::encode($data->nama_status); ?>
	<br />


</div>