<?php
/* @var $this Cms_data_pendidikanController */
/* @var $model Pendidikan */
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
	'id'=>'pendidikan-form',
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
		<?php echo $form->labelEx($model,'tingkat_pendidikan'); ?>
		<?php echo $form->textField($model,'tingkat_pendidikan',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tingkat_pendidikan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jurusan'); ?>
		<?php echo $form->textField($model,'jurusan',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'jurusan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uraian'); ?>
		<?php echo $form->textArea($model,'uraian',array('rows'=>6, 'cols'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'uraian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'teknik_non_teknik'); ?>
		<?php echo $form->textField($model,'teknik_non_teknik',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'teknik_non_teknik'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sekolah'); ?>
		<?php echo $form->textField($model,'sekolah',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'sekolah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tempat_sekolah'); ?>
		<?php echo $form->textArea($model,'tempat_sekolah',array('rows'=>6, 'cols'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tempat_sekolah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomor_sttb'); ?>
		<?php echo $form->textField($model,'nomor_sttb',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'nomor_sttb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_sttb'); ?>
		<?php echo $form->dateField($model,'tanggal_sttb',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tanggal_sttb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_lulus'); ?>
		<?php echo $form->dateField($model,'tanggal_lulus',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tanggal_lulus'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>