<?php
/* @var $this Cms_master_hukumanController */
/* @var $data Hukuman */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_hukuman')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_hukuman), array('view', 'id'=>$data->id_hukuman)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_hukuman')); ?>:</b>
	<?php echo CHtml::encode($data->nama_hukuman); ?>
	<br />


</div>