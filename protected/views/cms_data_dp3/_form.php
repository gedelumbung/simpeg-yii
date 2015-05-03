<?php
/* @var $this Cms_data_dp3Controller */
/* @var $model Dp3 */
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
	'id'=>'dp3-form',
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
		<?php echo $form->labelEx($model,'tahun'); ?>
		<?php echo $form->textField($model,'tahun',array('size'=>30,'maxlength'=>30, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tahun'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kesetiaan'); ?>
		<?php echo $form->textField($model,'kesetiaan',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'kesetiaan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prestasi'); ?>
		<?php echo $form->textField($model,'prestasi',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'prestasi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggung_jawab'); ?>
		<?php echo $form->textField($model,'tanggung_jawab',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tanggung_jawab'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ketaatan'); ?>
		<?php echo $form->textField($model,'ketaatan',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'ketaatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kejujuran'); ?>
		<?php echo $form->textField($model,'kejujuran',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'kejujuran'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kerjasama'); ?>
		<?php echo $form->textField($model,'kerjasama',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'kerjasama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prakarsa'); ?>
		<?php echo $form->textField($model,'prakarsa',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'prakarsa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kepemimpinan'); ?>
		<?php echo $form->textField($model,'kepemimpinan',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'kepemimpinan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'atasan'); ?>
		<?php echo $form->textField($model,'atasan',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'atasan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penilai'); ?>
		<?php echo $form->textField($model,'penilai',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'penilai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mengetahui'); ?>
		<?php echo $form->textField($model,'mengetahui',array('size'=>60,'maxlength'=>100, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'mengetahui'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>