<?php
/* @var $this Cms_data_dp3Controller */
/* @var $data Dp3 */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_dp3')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_dp3), array('view', 'id'=>$data->id_dp3)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pegawai')); ?>:</b>
	<?php echo CHtml::encode($data->id_pegawai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tahun')); ?>:</b>
	<?php echo CHtml::encode($data->tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kesetiaan')); ?>:</b>
	<?php echo CHtml::encode($data->kesetiaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prestasi')); ?>:</b>
	<?php echo CHtml::encode($data->prestasi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggung_jawab')); ?>:</b>
	<?php echo CHtml::encode($data->tanggung_jawab); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ketaatan')); ?>:</b>
	<?php echo CHtml::encode($data->ketaatan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('kejujuran')); ?>:</b>
	<?php echo CHtml::encode($data->kejujuran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kerjasama')); ?>:</b>
	<?php echo CHtml::encode($data->kerjasama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prakarsa')); ?>:</b>
	<?php echo CHtml::encode($data->prakarsa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kepemimpinan')); ?>:</b>
	<?php echo CHtml::encode($data->kepemimpinan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rata_rata')); ?>:</b>
	<?php echo CHtml::encode($data->rata_rata); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('atasan')); ?>:</b>
	<?php echo CHtml::encode($data->atasan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penilai')); ?>:</b>
	<?php echo CHtml::encode($data->penilai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mengetahui')); ?>:</b>
	<?php echo CHtml::encode($data->mengetahui); ?>
	<br />

	*/ ?>

</div>