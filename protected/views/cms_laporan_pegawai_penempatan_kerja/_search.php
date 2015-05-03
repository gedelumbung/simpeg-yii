<?php
/* @var $this Cms_master_eselonController */
/* @var $model Eselon */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'lokasi_kerja'); ?>
		<?php
			$this->widget('ext.chosen.Chosen',array(
			   'name' => 'Pegawai[lokasi_kerja]', // input name
			   'value' => $model->lokasi_kerja, // selection
			   'data' => array(''=>'Semua') + CHtml::listData(LokasiKerja::model()->findAll(),'id_lokasi_kerja','lokasi_kerja')
			));
		?>
	</div>
	<br>

	<div class="row">
		<?php echo $form->label($model,'id_satuan_kerja'); ?>
		<?php
			$this->widget('ext.chosen.Chosen',array(
			   'name' => 'Pegawai[id_satuan_kerja]', // input name
			   'value' => $model->id_satuan_kerja, // selection
			   'data' => array(''=>'Semua') + CHtml::listData(SatuanKerja::model()->findAll(),'id_satuan_kerja','nama_satuan_kerja')
			));
		?>
	</div>
	<br>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search', array('class'=>'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->