<?php
/* @var $this Cms_data_riwayat_jabatanController */
/* @var $model RiwayatJabatan */
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
	'id'=>'riwayat-jabatan-form',
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
		<?php echo $form->labelEx($model,'status'); ?>
		<?php
			$this->widget('ext.chosen.Chosen',array(
			   'name' => 'RiwayatJabatan[status]', // input name
			   'value' => $model->status, // selection
			   'data' => array(''=>'Semua') + CHtml::listData(StatusJabatan::model()->findAll(),'id_status_jabatan','nama_jabatan')
			));
		?>
		<?php echo $form->error($model,'status'); ?>
	</div>
	<br>

	<div class="row">
		<?php echo $form->labelEx($model,'penempatan'); ?>
		<?php echo $form->textField($model,'penempatan',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'penempatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_jabatan'); ?>
		<?php
			$this->widget('ext.chosen.Chosen',array(
			   'name' => 'RiwayatJabatan[id_jabatan]', // input name
			   'value' => $model->id_jabatan, // selection
			   'data' => array(''=>'Semua') + CHtml::listData(Jabatan::model()->findAll(),'id_jabatan','nama_jabatan')
			));
		?>
		<?php echo $form->error($model,'id_jabatan'); ?>
	</div>
	<br>

	<div class="row">
		<?php echo $form->labelEx($model,'id_unit_kerja'); ?>
		<?php
			$this->widget('ext.chosen.Chosen',array(
			   'name' => 'RiwayatJabatan[id_unit_kerja]', // input name
			   'value' => $model->id_unit_kerja, // selection
			   'data' => array(''=>'Semua') + CHtml::listData(UnitKerja::model()->findAll(),'id_unit_kerja','nama_unit_kerja')
			));
		?>
		<?php echo $form->error($model,'id_unit_kerja'); ?>
	</div>
	<br>

	<div class="row">
		<?php echo $form->labelEx($model,'uraian'); ?>
		<?php echo $form->textArea($model,'uraian',array('rows'=>6, 'cols'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'uraian'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_eselon'); ?>
		<?php
			$this->widget('ext.chosen.Chosen',array(
			   'name' => 'RiwayatJabatan[id_eselon]', // input name
			   'value' => $model->id_eselon, // selection
			   'data' => array(''=>'Semua') + CHtml::listData(Eselon::model()->findAll(),'id_eselon','nama_eselon')
			));
		?>
		<?php echo $form->error($model,'id_eselon'); ?>
	</div>
	<br>

	<div class="row">
		<?php echo $form->labelEx($model,'tmt_eselon'); ?>
		<?php echo $form->textField($model,'tmt_eselon',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'tmt_eselon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nomor_sk'); ?>
		<?php echo $form->textField($model,'nomor_sk',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'nomor_sk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_sk'); ?>
		<?php echo $form->dateField($model,'tanggal_sk',array('size'=>50,'maxlength'=>50, 'class'=>'input-block-level')); ?>
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
		<?php echo $form->labelEx($model,'lokasi'); ?>
		<?php echo $form->textField($model,'lokasi',array('size'=>60,'maxlength'=>150, 'class'=>'input-block-level')); ?>
		<?php echo $form->error($model,'lokasi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</div>
</div>