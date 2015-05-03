<?php
/* @var $this Cms_settingController */
/* @var $data Setting */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_setting')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_setting), array('view', 'id'=>$data->id_setting)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipe')); ?>:</b>
	<?php echo CHtml::encode($data->tipe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content_setting')); ?>:</b>
	<?php echo CHtml::encode($data->content_setting); ?>
	<br />


</div>