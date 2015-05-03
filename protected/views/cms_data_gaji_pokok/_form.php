<?php
/* @var $this Cms_data_gaji_pokokController */
/* @var $model GajiPokok */
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
	'id'=>'gaji-pokok-form',
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
		<?php echo $form->labelEx($model,'id_golongan'); ?>
		<?php
			$this->widget('ext.chosen.Chosen',array(
			   'name' => 'GajiPokok[id_golongan]', // input name
			   'value' => $model->id_golongan, // selection
			   'data' => array(''=>'Semua') + CHtml::listData(Golongan::model()->findAll(),'id_golongan','golongan')
			));
		?>
		<?php echo $form->error($model,'id_golongan'); ?>
	</div>
	<br>

	<div class="row">
		<?php echo $form->labelEx($model,'nomor_sk'); ?>
		<?php echo $form->textField($model,'nomor_sk',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'nomor_sk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_sk'); ?>
		<?php echo $form->textField($model,'tanggal_sk',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tanggal_sk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dasar_perubahan'); ?>
		<?php echo $form->textField($model,'dasar_perubahan',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'dasar_perubahan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gaji_pokok'); ?>
		<?php echo $form->textField($model,'gaji_pokok',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'gaji_pokok'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_mulai'); ?>
		<?php echo $form->textField($model,'tanggal_mulai',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tanggal_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_selesai'); ?>
		<?php echo $form->textField($model,'tanggal_selesai',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tanggal_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'masa_kerja'); ?>
		<?php echo $form->textField($model,'masa_kerja',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'masa_kerja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pejabat_menetapkan'); ?>
		<?php echo $form->textField($model,'pejabat_menetapkan',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'pejabat_menetapkan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>