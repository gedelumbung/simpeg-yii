<?php
/* @var $this Cms_master_lokasi_pelatihanController */
/* @var $data LokasiPelatihan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lokasi_pelatihan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_lokasi_pelatihan), array('view', 'id'=>$data->id_lokasi_pelatihan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_lokasi')); ?>:</b>
	<?php echo CHtml::encode($data->nama_lokasi); ?>
	<br />


</div>