<?php
/* @var $this Cms_master_lokasi_kerjaController */
/* @var $data LokasiKerja */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_lokasi_kerja')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_lokasi_kerja), array('view', 'id'=>$data->id_lokasi_kerja)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasi_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->lokasi_kerja); ?>
	<br />


</div>