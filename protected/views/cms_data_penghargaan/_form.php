<?php
/* @var $this Cms_data_penghargaanController */
/* @var $model DataPenghargaan */
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
	'id'=>'data-penghargaan-form',
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
		<?php echo $form->labelEx($model,'id_master_penghargaan'); ?>
		<?php
			$this->widget('ext.chosen.Chosen',array(
			   'name' => 'DataPenghargaan[id_master_penghargaan]', // input name
			   'value' => $model->id_master_penghargaan, // selection
			   'data' => array(''=>'Semua') + CHtml::listData(Penghargaan::model()->findAll(),'id_penghargaan','nama_penghargaan')
			));
		?>
		<?php echo $form->error($model,'id_master_penghargaan'); ?>
	</div>
	<br>

	<div class="row">
		<?php echo $form->labelEx($model,'uraian'); ?>
		<?php echo $form->textArea($model,'uraian',array('rows'=>6, 'cols'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'uraian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomor_sk'); ?>
		<?php echo $form->textField($model,'nomor_sk',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'nomor_sk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_sk'); ?>
		<?php echo $form->dateField($model,'tanggal_sk',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tanggal_sk'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>