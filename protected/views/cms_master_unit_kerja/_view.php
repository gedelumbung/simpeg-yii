<?php
/* @var $this Cms_master_unit_kerjaController */
/* @var $data UnitKerja */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_unit_kerja')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_unit_kerja), array('view', 'id'=>$data->id_unit_kerja)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_unit_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->nama_unit_kerja); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eselon')); ?>:</b>
	<?php echo CHtml::encode($data->eselon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_unit')); ?>:</b>
	<?php echo CHtml::encode($data->parent_unit); ?>
	<br />


</div>