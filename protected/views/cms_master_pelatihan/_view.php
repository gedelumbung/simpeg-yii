<?php
/* @var $this Cms_master_pelatihanController */
/* @var $data Pelatihan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pelatihan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_pelatihan), array('view', 'id'=>$data->id_pelatihan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_pelatihan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_pelatihan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
	<?php echo CHtml::encode($data->level); ?>
	<br />


</div>