<?php
/* @var $this Cms_data_hukumanController */
/* @var $model DataHukuman */
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
	'id'=>'data-hukuman-form',
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
		<?php echo $form->labelEx($model,'id_master_hukuman'); ?>
		<?php
			$this->widget('ext.chosen.Chosen',array(
			   'name' => 'DataHukuman[id_master_hukuman]', // input name
			   'value' => $model->id_master_hukuman, // selection
			   'data' => array(''=>'Semua') + CHtml::listData(Hukuman::model()->findAll(),'id_hukuman','nama_hukuman')
			));
		?>

		<?php echo $form->error($model,'id_master_hukuman'); ?>
	</div>

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

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_mulai'); ?>
		<?php echo $form->dateField($model,'tanggal_mulai',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tanggal_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_selesai'); ?>
		<?php echo $form->dateField($model,'tanggal_selesai',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tanggal_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'masa_berlaku'); ?>
		<?php echo $form->textField($model,'masa_berlaku',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'masa_berlaku'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pejabat_menetapkan'); ?>
		<?php echo $form->textField($model,'pejabat_menetapkan',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'pejabat_menetapkan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>