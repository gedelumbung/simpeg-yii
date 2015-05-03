<?php
/* @var $this Cms_master_satuan_kerjaController */
/* @var $data SatuanKerja */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_satuan_kerja')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_satuan_kerja), array('view', 'id'=>$data->id_satuan_kerja)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_satuan_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->nama_satuan_kerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_unit')); ?>:</b>
	<?php echo CHtml::encode($data->parent_unit); ?>
	<br />


</div>