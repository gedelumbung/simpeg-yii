<?php
/* @var $this Cms_data_pelatihanController */
/* @var $model DataPelatihan */
/* @var $form CActiveForm */
?>

<div class="portlet">
<div class="portlet-decoration">
<div class="portlet-title">
</div>
</div>
<div class="portlet-content">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'data-pelatihan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php $model->id_pegawai = $id; ?>
	<?php echo $form->hiddenField($model,'id_pegawai', array('class'=>'input-block-level')); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_master_pelatihan'); ?>
		<?php
			$this->widget('ext.chosen.Chosen',array(
			   'name' => 'DataPelatihan[id_master_pelatihan]', // input name
			   'value' => $model->id_master_pelatihan, // selection
			   'data' => array(''=>'Semua') + CHtml::listData(Pelatihan::model()->findAll(),'id_pelatihan','nama_pelatihan')
			));
		?>
		<?php echo $form->error($model,'id_master_pelatihan'); ?>
	</div>
	<br>

	<div class="row">
		<?php echo $form->labelEx($model,'uraian'); ?>
		<?php echo $form->textArea($model,'uraian',array('rows'=>6, 'cols'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'uraian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lokasi'); ?>
		<?php echo $form->textField($model,'lokasi',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'lokasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_sertifikat'); ?>
		<?php echo $form->dateField($model,'tanggal_sertifikat',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tanggal_sertifikat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jam_pelatihan'); ?>
		<?php echo $form->textField($model,'jam_pelatihan',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jam_pelatihan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'negara'); ?>
		<?php echo $form->textField($model,'negara',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'negara'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>