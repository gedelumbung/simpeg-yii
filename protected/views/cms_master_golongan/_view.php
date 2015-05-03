<?php
/* @var $this Cms_master_golonganController */
/* @var $data Golongan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_golongan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_golongan), array('view', 'id'=>$data->id_golongan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('golongan')); ?>:</b>
	<?php echo CHtml::encode($data->golongan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uraian')); ?>:</b>
	<?php echo CHtml::encode($data->uraian); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
	<?php echo CHtml::encode($data->level); ?>
	<br />


</div>