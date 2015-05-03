<div class="well" style="width:50%; margin:0px auto;">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

<fieldset>
	<legend>Log In</legend>
  <?php echo $form->errorSummary($model); ?>
		<?php echo $form->labelEx($model,'username', array('class' => 'control-label')); ?>
		<div class="control">
		<?php echo $form->textField($model,'username', array('class' => 'input-block-level', 'placeholder' => 'Masukkan username...')); ?>
		</div>
		<?php echo $form->error($model,'username'); ?>

		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password', array('class' => 'input-block-level', 'placeholder' => 'Masukkan password...')); ?>
		<?php echo $form->error($model,'password'); ?>

		<label class="checkbox">
		<?php echo $form->checkBox($model,'rememberMe'); ?> Remember me next time
	    </label>
		<?php echo $form->error($model,'rememberMe'); ?>

		<?php echo CHtml::submitButton('Login',array("class"=>"btn btn-primary")); ?>
		<?php echo CHtml::resetButton('Reset',array("class"=>"btn btn-info")); ?>

</fieldset>

<?php $this->endWidget(); ?>
</div>

<br><br>
