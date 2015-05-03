<?php
/* @var $this Cms_master_eselonController */
/* @var $data Eselon */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_eselon')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_eselon), array('view', 'id'=>$data->id_eselon)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_eselon')); ?>:</b>
	<?php echo CHtml::encode($data->nama_eselon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
	<?php echo CHtml::encode($data->level); ?>
	<br />


</div>