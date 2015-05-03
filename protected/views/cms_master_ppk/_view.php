<?php
/* @var $this Cms_master_ppkController */
/* @var $data Ppk */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_ppk')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_ppk), array('view', 'id'=>$data->id_ppk)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_ppk')); ?>:</b>
	<?php echo CHtml::encode($data->nama_ppk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent_satuan_kerja')); ?>:</b>
	<?php echo CHtml::encode($data->parent_satuan_kerja); ?>
	<br />


</div>